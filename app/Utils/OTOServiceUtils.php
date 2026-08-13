<?php

namespace App\Utils;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class OTOServiceUtils
{
    public function getAccessTokenOTO()
    {
        $response = Http::post(
            'https://api.tryoto.com/rest/v2/refreshToken',
            [
                'refresh_token' => config('services.oto.refresh_token'),
            ]
        );

        $data = $response->json();
        return $data['access_token'] ?? '';
    }

    public function checkDeliveryFeeAndGetCheapest($accessToken, $originCity, $destinationCity, $width, $length, $height, $weight)
    {
        $dataBody = [
            'originCity' => $originCity ?? '',
            'destinationCity' => $destinationCity ?? '',
            'width' => $width,
            'length' => $length,
            'height' => $height,
            'weight' => $weight,
            'isCod' => true,
        ];

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $accessToken,
            'Accept' => 'application/json',
        ])
            ->post(config('services.oto.url') . '/checkOTODeliveryFee', $dataBody);


        if ($response->ok()) {
            $result = $response->json();
            if ($result['success'] == false) {
                return null;
            }

            $companies = $result['deliveryCompany'];
            $cheapest = collect($companies)->sortBy('price')->first();
            return $cheapest;
            // $cheapestPrice = $cheapest['price'] ?? 0;
        }

        return null;
    }

    public function createOrder($orderData, $token)
    {
        $response = Http::withToken($token)
            ->post(config('services.oto.url') . '/createOrder', $orderData)
            ->json();

        return $response;
    }
}
