<?php

namespace AllDressed\Constants;

use AllDressed\Constants\Concerns\CanBeRandomized;
use AllDressed\Constants\Concerns\HasTranslation;

enum ThirdPartyService: string
{
    use HasTranslation, CanBeRandomized;

    case BECOOL = 'becool';
    case KLAVIYO = 'klaviyo';
    case NETSUITE = 'netsuite';
}