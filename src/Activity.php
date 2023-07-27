<?php

namespace AllDressed\Constants;

enum Activity: string
{
    case ADDED_SUBSCRIPTION = 'subscriptions:new';
    case CANCELLED_ORDER = 'orders:cancelled';
    case CANCELLED_SUBSCRIPTION = 'subscriptions:cancelled';
    case PAUSED_SUBSCRIPTION = 'subscriptions:paused';
    case PLACED_ORDER = 'orders:new';
    case REACTIVATED_SUBSCRIPTION = 'subscriptions:reactived';
    case REFUNDED_ORDER = 'orders:refunded';
    case RESUMED_SUBSCRIPTION = 'subscriptions:resumed';
}
