<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Models\AdminNotificationEmail;
use App\Services\EmailService;
use Illuminate\Support\Facades\Log;

class SendNewShippingRequestNotificationJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $shippingRequestId;
    public $vendorName;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($shippingRequestId, $vendorName = null)
    {
        $this->shippingRequestId = $shippingRequestId;
        $this->vendorName = $vendorName;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(EmailService $emailService)
    {
        try {
            $emails = AdminNotificationEmail::pluck('email')->toArray();
            
            if (empty($emails)) {
                Log::info('No admin notification emails found to send new shipping request alert.');
                return;
            }

            $subject = 'طلب شحن جديد بانتظار المراجعة - #' . $this->shippingRequestId;
            
            $vendorText = $this->vendorName ? "الخاص بالبائع: <strong>{$this->vendorName}</strong>" : "";
            
            $dashboardUrl = url('/dashboard/shipping-request-management/show/' . $this->shippingRequestId);
            
            $htmlMessage = "
                <div style='direction: rtl; text-align: right; font-family: Arial, sans-serif; line-height: 1.6;'>
                    <h2 style='color: #2c3e50;'>مرحباً،</h2>
                    <p>هناك طلب شحن جديد تم تأكيده من قبل العميل وهو بانتظار المراجعة الآن في لوحة التحكم.</p>
                    <p><strong>رقم الطلب:</strong> {$this->shippingRequestId}</p>
                    <p>{$vendorText}</p>
                    <br>
                    <p>
                        <a href='{$dashboardUrl}' style='display: inline-block; padding: 10px 20px; background-color: #3498db; color: #ffffff; text-decoration: none; border-radius: 5px;'>
                            مراجعة الطلب في لوحة التحكم
                        </a>
                    </p>
                    <br>
                    <p>تحياتنا،<br>فريق وسيط السيارات</p>
                </div>
            ";

            foreach ($emails as $email) {
                $emailService->sendEmail($email, $subject, $htmlMessage);
            }
            
            Log::info("Sent new shipping request notification for request #{$this->shippingRequestId} to " . count($emails) . " admins.");
            
        } catch (\Exception $e) {
            Log::error('Error in SendNewShippingRequestNotificationJob: ' . $e->getMessage());
        }
    }
}
