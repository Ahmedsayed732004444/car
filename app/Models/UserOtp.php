<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Model;
use Twilio\Rest\Client;

class UserOtp extends Model
{
    protected $fillable = [
        'user_id',
        'otp',
        'expire_at',
    ];

    protected $casts = [
        'expire_at' => 'datetime',
    ];

    protected $dates = [
        'expire_at',
    ];

    public function sendSMS($receiverNumber)
    {
        $message = "Login OTP is " . $this->otp;

        try {
            $account_sid = env("TWILIO_AUTH_SID");
            $auth_token = env("TWILIO_AUTH_TOKEN");
            $twilio_number = env("TWILIO_WHATSAPP_FROM");

            $client = new Client($account_sid, $auth_token);
            $client->messages->create('whatsapp:+967774211463', [
                'from' => 'whatsapp:+14155238886',
                'body' => $message
            ]);

            info('SMS Sent Successfully.');
        } catch (Exception $e) {
            info("Error: " . $e->getMessage());
        }
    }

    private function whatsappNotification(string $recipient)
    {
        $sid    = env("TWILIO_AUTH_SID");
        $token  = env("TWILIO_AUTH_TOKEN");
        $wa_from = env("TWILIO_WHATSAPP_FROM");
        $client = new Client($sid, $token);
        $twilio = new Client($sid, $token);

        $body = "Hello, welcome to codelapan.com.";

        return $twilio->messages->create("whatsapp:$recipient", ["from" => "whatsapp:$wa_from", "body" => $body]);
    }
}
