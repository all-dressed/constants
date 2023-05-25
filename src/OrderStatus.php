<?php

namespace AllDressed\Constants;

use AllDressed\Constants\Concerns\AvailableAsCollection;
use AllDressed\Constants\Concerns\AvailableAsOptions;
use AllDressed\Constants\Concerns\CanBeRandomized;

enum OrderStatus: string
{
    use AvailableAsCollection, AvailableAsOptions, CanBeRandomized;

    case CANCELLED = 'cancelled';
    case PENDING = 'pending';
    case PAID = 'paid';
    case REFUNDED = 'refunded';
    case UPCOMING = 'upcoming';
}
