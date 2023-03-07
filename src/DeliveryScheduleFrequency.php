<?php

namespace AllDressed\Constants;

use AllDressed\Constants\Concerns\AvailableAsCollection;
use AllDressed\Constants\Concerns\AvailableAsOptions;
use AllDressed\Constants\Concerns\CanBeRandomized;

enum DeliveryScheduleFrequency: int
{
    use AvailableAsCollection, AvailableAsOptions, CanBeRandomized;

    case WEEKLY = 7;
    case BIWEEKLY = 14;
    case EVERY_FOUR_WEEKS = 28;
    case EVERY_EIGHT_WEEKS = 56;
}
