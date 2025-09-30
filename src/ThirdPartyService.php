<?php

namespace AllDressed\Constants;

use AllDressed\Constants\Concerns\CanBeRandomized;
use AllDressed\Constants\Concerns\HasTranslation;

enum ThirdPartyService: string
{
    use CanBeRandomized, HasTranslation;

    case BECOOL = 'becool';
    case GLEEN_AI = 'gleen-ai';
    case KLAVIYO = 'klaviyo';
    case LEGACY_CUSTOMER_NOTES = 'legacy-customer-notes';
    case NETSUITE = 'netsuite';
    case ZENDESK = 'zendesk';
}
