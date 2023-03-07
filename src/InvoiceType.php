<?php

namespace AllDressed\Constants;

use AllDressed\Constants\Concerns\AvailableAsCollection;
use AllDressed\Constants\Concerns\CanBeRandomized;

enum InvoiceType: string
{
    use AvailableAsCollection, CanBeRandomized;

    case PAYMENT = 'payment';
}
