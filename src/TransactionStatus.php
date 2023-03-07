<?php

namespace AllDressed\Constants;

use AllDressed\Constants\Concerns\AvailableAsCollection;
use AllDressed\Constants\Concerns\CanBeRandomized;

enum TransactionStatus: string
{
    use AvailableAsCollection, CanBeRandomized;

    case FAILED = 'failed';
    case SUCCEEDED = 'succeeded';
}
