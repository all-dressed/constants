<?php

namespace AllDressed\Constants;

use AllDressed\Constants\Concerns\AvailableAsCollection;
use AllDressed\Constants\Concerns\CanBeRandomized;

enum PaymentStatus: string
{
    use AvailableAsCollection, CanBeRandomized;

    case PENDING = 'pending';
    case PAID = 'paid';
}
