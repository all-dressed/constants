<?php

namespace AllDressed\Constants;

use AllDressed\Constants\Concerns\AvailableAsCollection;
use AllDressed\Constants\Concerns\CanBeRandomized;
use AllDressed\Constants\Concerns\HasTranslation;

enum TransactionStatus: string
{
    use AvailableAsCollection, CanBeRandomized, HasTranslation;

    case FAILED = 'failed';
    case SUCCEEDED = 'succeeded';
}
