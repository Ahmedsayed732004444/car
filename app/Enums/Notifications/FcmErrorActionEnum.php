<?php

namespace App\Enums\Notifications;

/**
 * What to do with a device token after a single FCM send attempt failed.
 */
enum FcmErrorActionEnum
{
    /** The token is dead (uninstalled / rotated / malformed) — prune it. */
    case DeleteToken;

    /** Transient failure — worth another attempt with backoff. */
    case Retry;

    /** Not the token's fault and not transient — log and move on. */
    case Drop;
}
