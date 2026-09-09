<?php

namespace App\Services;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Throwable;

class EmailService
{
    /**
     * Send an HTML email using the configured SMTP driver (Gmail).
     *
     * @param string $email Recipient email address
     * @param string $subject Email subject line
     * @param string $htmlMessage HTML formatted message body
     * @return bool True if sent successfully, false otherwise
     */
    public function sendEmail(string $email, string $subject, string $htmlMessage): bool
    {
        try {
            Log::info("Connecting to SMTP and sending email to: {$email} with subject: '{$subject}'");

            Mail::html($htmlMessage, function ($message) use ($email, $subject) {
                $message->to($email)
                        ->subject($subject);
            });

            Log::info("Email sent successfully to {$email}");
            return true;
        } catch (Throwable $e) {
            Log::error("Failed to send email to {$email}. Error: " . $e->getMessage(), [
                'email' => $email,
                'subject' => $subject,
                'trace' => $e->getTraceAsString(),
            ]);
            return false;
        }
    }

    /**
     * Send a plain text email.
     *
     * @param string $email Recipient email address
     * @param string $subject Email subject line
     * @param string $textMessage Plain text message body
     * @return bool True if sent successfully, false otherwise
     */
    public function sendPlainEmail(string $email, string $subject, string $textMessage): bool
    {
        try {
            Log::info("Sending plain text email to: {$email}");

            Mail::raw($textMessage, function ($message) use ($email, $subject) {
                $message->to($email)
                        ->subject($subject);
            });

            Log::info("Plain email sent successfully to {$email}");
            return true;
        } catch (Throwable $e) {
            Log::error("Failed to send plain email to {$email}. Error: " . $e->getMessage());
            return false;
        }
    }
}
