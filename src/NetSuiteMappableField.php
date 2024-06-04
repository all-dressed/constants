<?php

namespace AllDressed\Constants;

use AllDressed\Constants\Concerns\CanBeRandomized;
use AllDressed\Constants\Concerns\HasTranslation;

enum NetSuiteMappableField: string
{
    use CanBeRandomized, HasTranslation;

    case TRANSACTION_IDENTIFIER = 'transaction.identifier';
    case GATEWAY_LABEL = 'gateway.label';
}
