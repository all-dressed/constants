<?php

namespace AllDressed\Constants;

use AllDressed\Constants\Concerns\HasTranslation;

enum ThirdPartyService: string
{
    use HasTranslation;

    case BECOOL = 'becool';
    case KLAVIYO = 'klaviyo';
    case NETSUITE = 'netsuite';
}
