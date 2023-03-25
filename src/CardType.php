<?php

namespace AllDressed\Constants;

use AllDressed\Constants\Concerns\AvailableAsCollection;
use AllDressed\Constants\Concerns\CanBeRandomized;
use AllDressed\Constants\Concerns\HasTranslation;

enum CardType: string
{
    use AvailableAsCollection, CanBeRandomized, HasTranslation;

    case AMEX = 'amex';
    case DISCOVER = 'discover';
    case MASTERCARD = 'mastercard';
    case OTHER = 'other';
    case VISA = 'visa';
}
