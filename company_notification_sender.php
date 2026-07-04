<?php
class CompanyNotificationSender
{
    /**
     * @param array $payload  ex ["email"=>"", "mobile"=>"", "body"=>"", "subject"=>""]
     */
    public static function sendNotification($payload, $encoding = "utf-8")
    {
        $base_url = AfwSession::config("api_base_url", "yyyyyyyy");
        $token    = AfwSession::config("api_token", "XXXXYYY");

        $ch = curl_init("$base_url/message/send");
        curl_setopt_array($ch, [
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_POST           => true,
                CURLOPT_POSTFIELDS     => json_encode($payload),
                CURLOPT_HTTPHEADER     => [
                        "Authorization: Bearer $token",
                        "Content-Type: application/json",
                        "Accept: application/json",
                ],
        ]);

        $response = curl_exec($ch);
        $status   = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        return [
                "status"   => $status,
                "response" => json_decode($response, true),
        ];
    }
}
