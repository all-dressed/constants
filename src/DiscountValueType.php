<?php

namespace AllDressed\Constants;

use AllDressed\Constants\Concerns\AvailableAsCollection;
use AllDressed\Constants\Concerns\AvailableAsOptions;
use AllDressed\Constants\Concerns\CanBeRandomized;

enum DiscountValueType: string
{
    use AvailableAsCollection, AvailableAsOptions, CanBeRandomized;

    case PERCENTAGE = 'percentage';
    case VALUE = 'value';
}
