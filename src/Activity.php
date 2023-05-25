<?php

namespace AllDressed\Constants;

enum Activity: string
{
    case ADDED_SUBSCRIPTION = 'subscriptions:new';
    case CANCELLED_SUBSCRIPTION = 'subscriptions:cancelled';
    case PAUSED_SUBSCRIPTION = 'subscriptions:paused';
    case REACTIVATED_SUBSCRIPTION = 'subscriptions:reactived';
    case RESUMED_SUBSCRIPTION = 'subscriptions:resumed';
}
