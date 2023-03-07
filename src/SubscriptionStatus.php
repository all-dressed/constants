<?php

namespace AllDressed\Constants;

use AllDressed\Constants\Concerns\CanBeRandomized;

enum SubscriptionStatus: string
{
    use CanBeRandomized;

    case ACTIVE = 'active';
    case CANCELLED = 'cancelled';
    case PAUSED = 'paused';
    case PENDING = 'pending';
}
