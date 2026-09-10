<?php

namespace App\Enums\Notifications;

/**
 * Canonical notification categories. Replaces the raw category strings that
 * used to be passed around call-sites (and which, for three of them, silently
 * fell back to the wrong default — see NotificationsTrait::notifyByID).
 */
enum NotificationCategoryEnum: string
{
    case ChatMessage = 'chat_message';
    case NewRequest = 'new_request';
    case VendorResponse = 'vendor_response';
    case VendorStatus = 'vendor_status';
    case ShippingRequest = 'shipping_request';
    case ComplaintFiled = 'complaint_filed';
    case VendorJoinRequest = 'vendor_join_request';
    case Generic = 'generic';

    /**
     * Deep-link destination a new client should route to.
     */
    public function route(): string
    {
        return match ($this) {
            self::ChatMessage, self::ShippingRequest => 'chat',
            self::VendorResponse => 'request_responses',
            self::NewRequest => 'request_details',
            default => 'notifications',
        };
    }

    /**
     * The category string old (pre-overhaul) installed app builds still
     * switch on. Kept stable during the compatibility window — see
     * PushPayload::toDataArray().
     */
    public function legacyCategory(): string
    {
        return match ($this) {
            self::ChatMessage, self::ShippingRequest, self::VendorStatus, self::Generic => 'conversations',
            self::VendorResponse => 'company_responses',
            self::NewRequest, self::ComplaintFiled, self::VendorJoinRequest => 'customer_requests',
        };
    }

    /**
     * Which unread-badge bucket this category increments, or null if it
     * doesn't participate in the badge at all (e.g. an admin-only alert).
     */
    public function badgeBucket(): ?string
    {
        return match ($this) {
            self::ChatMessage, self::ShippingRequest => 'conversations',
            self::VendorResponse => 'company_responses',
            self::NewRequest => 'customer_requests',
            default => null,
        };
    }
}
