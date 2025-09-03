<?php

namespace AllDressed\Constants;

use AllDressed\Constants\Concerns\AvailableAsCollection;
use AllDressed\Constants\Concerns\CanBeRandomized;
use AllDressed\Constants\Concerns\HasTranslation;

enum InvoiceType: string
{
    use AvailableAsCollection, CanBeRandomized, HasTranslation;

    case CANCELLATION = 'cancellation';
    case CREDIT = 'credit';
    case PAYMENT = 'payment';
    case QUOTE = 'quote';
    case REFUND = 'refund';
}
