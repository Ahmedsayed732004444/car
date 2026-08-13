<?php

namespace App\Enums;

enum ComplaintStatusEnum: string
{
    case New = 'new';
    case UnderReview = 'under_review';
    case Resolved = 'resolved';
    case Rejected = 'rejected';
    case Closed = 'closed';
}
