<?php

namespace AllDressed\Constants;

use AllDressed\Constants\Concerns\AvailableAsCollection;
use AllDressed\Constants\Concerns\AvailableAsOptions;
use AllDressed\Constants\Concerns\CanBeRandomized;

enum SearchableAttributeType: string
{
    use AvailableAsCollection, AvailableAsOptions, CanBeRandomized;

    case DATETIME = 'datetime';
    case ENUM = 'enum';
    case TEXT = 'text';
}
