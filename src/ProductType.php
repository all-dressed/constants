<?php

namespace AllDressed\Constants;

use AllDressed\Constants\Concerns\AvailableAsCollection;
use AllDressed\Constants\Concerns\AvailableAsOptions;
use AllDressed\Constants\Concerns\CanBeRandomized;

enum ProductType: string
{
    use AvailableAsCollection, AvailableAsOptions, CanBeRandomized;

    case EDIBLE = 'edible';
    case GENERIC = 'generic';
    case PET_FOOD = 'pet-food';
    case PET_TOY = 'pet-toy';
}
