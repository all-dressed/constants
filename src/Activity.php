<?php

namespace AllDressed\Constants;

enum Activty: string
{
    case ADDED_SUBSCRIPTION = 'subscriptions:new';
    case CANCELLED_SUBSCRIPTION = 'subscriptions:cancelled';
    case PAUSED_SUBSCRIPTION = 'subscriptions:paused';
    case RESUMED_SUBSCRIPTION = 'subscriptions:resumed';
}
