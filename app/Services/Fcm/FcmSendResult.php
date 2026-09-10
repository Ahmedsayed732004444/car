<?php

namespace App\Services\Fcm;

use App\Enums\Notifications\FcmErrorActionEnum;

final class FcmSendResult
{
    public function __construct(
        public readonly string $token,
        public readonly bool $ok,
        public readonly ?int $httpStatus = null,
        public readonly ?string $errorCode = null,
        public readonly FcmErrorActionEnum $action = FcmErrorActionEnum::Drop,
    ) {}
}
