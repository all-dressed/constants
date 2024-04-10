<?php

namespace AllDressed\Constants;

use AllDressed\Constants\Concerns\AvailableAsCollection;
use AllDressed\Constants\Concerns\AvailableAsOptions;
use AllDressed\Constants\Concerns\CanBeRandomized;

enum UserRole: string
{
    use AvailableAsCollection, AvailableAsOptions, CanBeRandomized;

    case ADMIN = 'admin';
    case CLIENT = 'client';
}
