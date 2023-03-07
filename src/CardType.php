<?php

namespace AllDressed\Constants;

use AllDressed\Constants\Concerns\AvailableAsCollection;
use AllDressed\Constants\Concerns\CanBeRandomized;

enum CardType: string
{
    use AvailableAsCollection, CanBeRandomized;

    case AMEX = 'amex';
    case DISCOVER = 'discover';
    case MASTERCARD = 'mastercard';
    case OTHER = 'other';
    case VISA = 'visa';
}
