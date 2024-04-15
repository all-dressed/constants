<?php

namespace AllDressed\Constants;

use AllDressed\Constants\Concerns\CanBeRandomized;
use AllDressed\Constants\Concerns\HasTranslation;

enum ThirdPartyService: string
{
    use CanBeRandomized, HasTranslation;

    case BECOOL = 'becool';
    case GLEEN = 'gleen';
    case KLAVIYO = 'klaviyo';
    case NETSUITE = 'netsuite';
}
