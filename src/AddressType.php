<?php

namespace AllDressed\Constants;

use AllDressed\Constants\Concerns\CanBeRandomized;

enum AddressType: string
{
    use CanBeRandomized;

    case APARTMENT = 'apartment';
    case BUSINESS = 'business';
    case HOUSE = 'house';
}
