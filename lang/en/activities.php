<?php

use AllDressed\Constants\Activity;

return [
    Activity::ACTIVATED_GIFT_CARD->value => ':name has activated the :code gift card.',
    Activity::ADDED_SUBSCRIPTION->value => ':name has added a new subscription.',
    Activity::CANCELLED_ORDER->value => ':name has cancelled an order.',
    Activity::CANCELLED_SUBSCRIPTION->value => ':name has cancelled a subscription.',
    Activity::FAILED_SUBSCRIPTION_PAYMENT->value => ':name has failed a payment.',
    Activity::PAUSED_SUBSCRIPTION->value => ':name has paused a subscription.',
    Activity::PLACED_ORDER->value => ':name has placed a new order of :amount :currency.',
    Activity::REACTIVATED_SUBSCRIPTION->value => ':name has reactivated a subscription.',
    Activity::REFUNDED_ORDER->value => ':name has received a refund of :amount :currency.',
    Activity::RESUMED_SUBSCRIPTION->value => ':name has resumed a subscription.',
    Activity::SENT_GIFT_CARD->value => ':name has sent the :code gift card to :receiver (:email).',
    Activity::SKIPPED_MENU->value => ':name has skipped the delivery of :date for :subscription.',
    Activity::UNSKIPPED_MENU->value => ':name has unskipped the delivery of :date for :subscription.',
    Activity::UPDATE_CUSTOMER_PROFILE->value => ':name has updated of :customer\'s profile',
];