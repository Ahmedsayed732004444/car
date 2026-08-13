<?php

namespace App\Utils;

use Exception;
use GuzzleHttp\Client as GuzzleClient;
use Google_Client;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;


class FcmNotificationUtils
{
    protected $title;
    protected $body;
    protected $icon;
    protected $click_action;
    protected $token;
    protected $topic;

    /**
     *Title of the notification.
     *@param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     *Body of the notification.
     *@param string $body
     */
    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     *Icon of the notification.
     *@param string $icon
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;
        return $this;
    }

    /**
     *Link of the notification when user click on it.
     *@param string $click_action
     */
    public function setClickAction($click_action)
    {
        $this->click_action = $click_action;
        return $this;
    }

    /**
     *Token used to send notification to specific device. Unusable with setTopic() at same time.
     *@param string $string
     */
    public function setToken($token)
    {
        $this->token = $token;
        return $this;
    }

    /**
     *Topic of the notification. Unusable with setToken() at same time.
     *@param string $topic
     */
    public function setTopic($topic)
    {
        $this->topic = $topic;
        return $this;
    }

    /**
     * Verify the conformity of the notification. If everything is ok, send the notification.
     */
    public function send()
    {
        // Token and topic combinaison verification
        if ($this->token != null && $this->topic != null) {
            return;
        }

        // Empty token or topic verification
        if ($this->token == null && $this->topic == null) {
            return;
        }

        // Title verification
        if (!isset($this->title)) {
            return;
        }

        // Body verification
        if (!isset($this->body)) {
            return;
        }

        return $this->prepareSend();
    }

    private function prepareSend()
    {
        $dataArr = [
            'click_action' => $this->click_action ?? 'FLUTTER_NOTIFICATION_CLICK',
            'status' => 'done',
            'type_notification' => 'all',
            'screen' => 'NotificationsScreen',
        ];

        if (isset($this->topic)) {
            $json = [
                "message" => [
                    "topic" => $this->topic,
                    "notification" => [
                        "title" => $this->title,
                        "body" => $this->body,
                    ],
                    'data' => $dataArr,
                ]
            ];
        } else if (isset($this->token)) {
            $json = [
                "message" => [
                    "token" => $this->token,
                    "notification" => [
                        "title" => $this->title,
                        "body" => $this->body,
                    ],
                    'data' => $dataArr,
                ]
            ];
        }

        // $encodedData = json_encode($data);

        return $this->handleSend($json);
    }

    private function handleSend($json)
    {
        try {
            $client = new GuzzleClient();
            // project_id = mazad-ibraa
            $response = $client->post('https://fcm.googleapis.com/v1/projects/car-mediator-platform/messages:send', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->getAccessToken(),
                    'Content-Type' => 'application/json',
                ],
                'json' => $json,
            ]);

            return $response ?? '';
        } catch (Exception $e) {
            Log::error("[Notification] ERROR", [$e->getMessage()]);

            return $e;
        }
    }

    private function getAccessToken()
    {
        return Cache::remember('fcm_access_token_key', 3500, function () {
            $credentialsPath = storage_path('app/json/firebase/car-mediator-platform-firebase-adminsdk-fbsvc-1d8876fe49.json'); // Path to your service account file

            $client = new Google_Client();
            $client->setAuthConfig($credentialsPath);
            $client->addScope('https://www.googleapis.com/auth/firebase.messaging');

            $token = $client->fetchAccessTokenWithAssertion();
            return $token['access_token'];
        });
    }
}
