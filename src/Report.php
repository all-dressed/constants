<?php

namespace AllDressed\Constants;

use AllDressed\Constants\Concerns\AvailableAsCollection;
use AllDressed\Constants\Concerns\CanBeRandomized;

enum Report: string
{
    use AvailableAsCollection, CanBeRandomized;

    case BC_ITEMS_SOLD = 'bc-items-sold';
    case SUBSCRIPTIONS = 'subscriptions';
}
