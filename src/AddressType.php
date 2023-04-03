<?php

namespace AllDressed\Constants;

use AllDressed\Constants\Concerns\AvailableAsCollection;
use AllDressed\Constants\Concerns\AvailableAsOptions;
use AllDressed\Constants\Concerns\CanBeRandomized;

enum AddressType: string
{
    use CanBeRandomized, AvailableAsOptions, AvailableAsCollection;

    case APARTMENT = 'apartment';
    case BUSINESS = 'business';
    case HOUSE = 'house';
}
