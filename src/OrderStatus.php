<?php

namespace AllDressed\Constants;

use AllDressed\Constants\Concerns\AvailableAsCollection;
use AllDressed\Constants\Concerns\AvailableAsOptions;
use AllDressed\Constants\Concerns\CanBeRandomized;

enum OrderStatus: string
{
    use AvailableAsCollection, AvailableAsOptions, CanBeRandomized;

    case PENDING = 'pending';
    case PAID = 'paid';
    case UPCOMING = 'upcoming';
}
