<?php

namespace AllDressed\Constants;

use AllDressed\Constants\Concerns\CanBeRandomized;
use AllDressed\Constants\Concerns\HasTranslation;

enum NetSuiteMappableField: string
{
    use CanBeRandomized, HasTranslation;

    case GATEWAY_LABEL = 'gateway.label';
    case TRANSACTION_IDENTIFIER = 'transaction.identifier';
}
