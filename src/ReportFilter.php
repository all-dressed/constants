<?php

namespace AllDressed\Constants;

use AllDressed\Constants\Concerns\AvailableAsCollection;
use AllDressed\Constants\Concerns\CanBeRandomized;

enum ReportFilter: string
{
    use AvailableAsCollection, CanBeRandomized;

    case DELIVERY_DATE = 'delivery-date';
    case INVOICE_DATE = 'invoice-date';
}
