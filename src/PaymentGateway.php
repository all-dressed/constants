<?php

namespace AllDressed\Constants;

use AllDressed\Constants\Concerns\AvailableAsCollection;
use AllDressed\Constants\Concerns\AvailableAsOptions;
use AllDressed\Constants\Concerns\CanBeRandomized;

enum PaymentGateway: string
{
    use AvailableAsCollection, AvailableAsOptions, CanBeRandomized;

    case STRIPE = 'stripe';
}
