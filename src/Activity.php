<?php

namespace AllDressed\Constants;

use AllDressed\Constants\Concerns\AvailableAsOptions;
use AllDressed\Constants\Concerns\CanBeRandomized;

enum Activity: string
{
    use AvailableAsOptions, CanBeRandomized;

    case ACTIVATED_GIFT_CARD = 'gift-cards:activated';
    case ADDED_SUBSCRIPTION = 'subscriptions:new';
    case CANCELLED_ORDER = 'orders:cancelled';
    case CANCELLED_SUBSCRIPTION = 'subscriptions:cancelled';
    case CREATED_CUSTOMER = 'customers:created';
    case DELETED_CUSTOMER = 'customers:deleted';
    case DISCONTINUED_PRODUCT = 'products:discontinued';
    case FAILED_PAYMENT = 'customers:failed-payment';
    case NEW_REFERRAL_CODE = 'customers:referrals:created';
    case PAUSED_SUBSCRIPTION = 'subscriptions:paused';
    case PAID_ORDER = 'orders:paid';
    case PLACED_ORDER = 'orders:new';
    case PURCHASED_GIFT_CARD = 'gift-cards:purchased';
    case REACTIVATED_SUBSCRIPTION = 'subscriptions:reactived';
    case REFUNDED_ORDER = 'orders:refunded';
    case REMOVED_PACKAGE_PRODUCT = 'packages:removed-product';
    case RESUMED_SUBSCRIPTION = 'subscriptions:resumed';
    case SENT_GIFT_CARD = 'gift-cards:sent';
    case SKIPPED_MENU = 'subscriptions:skipped-menu';
    case UPDATED_CREDITS = 'customers:credits:updated';
    case UPDATED_CUSTOMER = 'customers:updated';
    case UNSKIPPED_MENU = 'subscriptions:unskipped-menu';
}