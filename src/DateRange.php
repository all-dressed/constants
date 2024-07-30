<?php

namespace AllDressed\Constants;

use AllDressed\Constants\Concerns\AvailableAsCollection;
use AllDressed\Constants\Concerns\AvailableAsOptions;
use AllDressed\Constants\Concerns\CanBeRandomized;
use AllDressed\Constants\Concerns\HasTranslation;

enum DateRange: string
{
    use AvailableAsCollection,
        AvailableAsOptions,
        CanBeRandomized,
        HasTranslation;

    case LAST_WEEK = 'last-week';
    case LAST_MONTH = 'last-month';
    case MONTH_TO_DATE = 'month-to-date';
}
