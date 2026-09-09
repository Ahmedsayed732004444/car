<?php

namespace App\Http\Controllers\Dashboard\Settings;

use App\Http\Controllers\Controller;
use App\Models\AdminNotificationEmail;
use Illuminate\Http\Request;

class NotificationEmailController extends Controller
{
    public function index()
    {
        $emails = AdminNotificationEmail::latest()->get();
        return view('dashboard.settings.notification-emails.index', compact('emails'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:admin_notification_emails,email'
        ], [
            'email.required' => 'البريد الإلكتروني مطلوب.',
            'email.email' => 'صيغة البريد الإلكتروني غير صحيحة.',
            'email.unique' => 'هذا البريد مسجل مسبقاً.'
        ]);

        AdminNotificationEmail::create([
            'email' => $request->email
        ]);

        return redirect()->back()->with('success', 'تم إضافة البريد الإلكتروني بنجاح.');
    }

    public function destroy($id)
    {
        $email = AdminNotificationEmail::findOrFail($id);
        $email->delete();

        return redirect()->back()->with('success', 'تم حذف البريد الإلكتروني بنجاح.');
    }
}
