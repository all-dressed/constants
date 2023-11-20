<?php

namespace AllDressed\Constants;

use AllDressed\Constants\Concerns\CanBeRandomized;

enum Activity: string
{
    use CanBeRandomized;

    case ACTIVATED_GIFT_CARD = 'gift-cards:activated';
    case ADDED_SUBSCRIPTION = 'subscriptions:new';
    case CANCELLED_ORDER = 'orders:cancelled';
    case CANCELLED_SUBSCRIPTION = 'subscriptions:cancelled';
    case FAILED_SUBSCRIPTION_PAYMENT = 'subscriptions:failed-payment';
    case PAUSED_SUBSCRIPTION = 'subscriptions:paused';
    case PLACED_ORDER = 'orders:new';
    case REACTIVATED_SUBSCRIPTION = 'subscriptions:reactived';
    case REFUNDED_ORDER = 'orders:refunded';
    case REMOVED_PACKAGE_PRODUCT = 'packages:removed-product';
    case RESUMED_SUBSCRIPTION = 'subscriptions:resumed';
    case SENT_GIFT_CARD = 'gift-cards:sent';
    case SKIPPED_MENU = 'subscriptions:skipped-menu';
    case UNSKIPPED_MENU = 'subscriptions:unskipped-menu';
}
