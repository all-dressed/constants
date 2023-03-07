<?php

namespace AllDressed\Constants;

use AllDressed\Constants\Concerns\AvailableAsCollection;
use AllDressed\Constants\Concerns\CanBeRandomized;

enum DiscountItemRestrictionType: string
{
    use AvailableAsCollection, CanBeRandomized;

    case PRODUCT_CATEGORY = 'product_category';
}
