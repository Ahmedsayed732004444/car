<?php

namespace App\Utils;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class OTOServiceUtils
{
    public function getBaseUrl(): string
    {
        $url = config('services.oto.url');
        if (empty($url)) {
            $url = env('OTO_API_URL', 'https://api.tryoto.com/rest/v2');
        }
        return rtrim($url, '/');
    }

    public function getRefreshToken(): string
    {
        $token = config('services.oto.refresh_token');
        if (empty($token)) {
            $token = env('OTO_REFRESH_TOKEN', 'AMf-vBwsG7J61J_1EkBNW_wnKdQc4Xyalpz59J1QittknHfsekYzdv-1sDxoeD1oaw5_OBxmnVtjkwzm7nAUsfkEZoZpmMQtAINMhJLIWxAiJ1xnX9IY4ksBrIGoiGFG1ULhV8nT-a7ucNxD28bjK-cf6bOPEVWYpVDdQToxKpvgEXp2yQTujA3HT5XMIo_x31f1k6I41WA3pdKzsrwSCU_NQSijp1oBxQ');
        }
        return $token ?? '';
    }

    public function getAccessTokenOTO()
    {
        try {
            $response = Http::timeout(15)->post(
                $this->getBaseUrl() . '/refreshToken',
                [
                    'refresh_token' => $this->getRefreshToken(),
                ]
            );

            if ($response->ok()) {
                $data = $response->json();
                return $data['access_token'] ?? '';
            }

            Log::error('OTO Refresh Token Failed: ' . $response->status() . ' - ' . $response->body());
            return '';
        } catch (\Exception $e) {
            Log::error('OTO Refresh Token Exception: ' . $e->getMessage());
            return '';
        }
    }

    public function checkDeliveryFeeAndGetCheapest($accessToken, $originCity, $destinationCity, $width, $length, $height, $weight)
    {
        $dataBody = [
            'originCity' => $originCity ?? '',
            'destinationCity' => $destinationCity ?? '',
            'width' => (float) ($width ?: 10),
            'length' => (float) ($length ?: 10),
            'height' => (float) ($height ?: 10),
            'weight' => (float) ($weight ?: 1),
            'isCod' => true,
        ];

        try {
            $response = Http::timeout(15)->withHeaders([
                'Authorization' => 'Bearer ' . $accessToken,
                'Accept' => 'application/json',
            ])
                ->post($this->getBaseUrl() . '/checkOTODeliveryFee', $dataBody);

            if ($response->ok()) {
                $result = $response->json();
                if (isset($result['success']) && $result['success'] == false) {
                    Log::warning('OTO checkDeliveryFee Warning: ', $result);
                    return null;
                }

                $companies = $result['deliveryCompany'] ?? [];
                if (empty($companies)) {
                    return null;
                }

                $cheapest = collect($companies)->sortBy('price')->first();
                return $cheapest;
            }

            Log::error('OTO checkDeliveryFee Error: ' . $response->status() . ' - ' . $response->body());
            return null;
        } catch (\Exception $e) {
            Log::error('OTO checkDeliveryFee Exception: ' . $e->getMessage());
            return null;
        }
    }

    public function createOrder($orderData, $token)
    {
        try {
            $response = Http::timeout(15)->withToken($token)
                ->post($this->getBaseUrl() . '/createOrder', $orderData)
                ->json();

            return $response;
        } catch (\Exception $e) {
            Log::error('OTO createOrder Exception: ' . $e->getMessage());
            return null;
        }
    }
}
