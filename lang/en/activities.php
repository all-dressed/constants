<?php

use AllDressed\Constants\Activity;

return [
    Activity::ACTIVATED_GIFT_CARD->value => ':name has activated the :code gift card of :value :currency.',
    Activity::ADDED_SUBSCRIPTION->value => [
        'title' => 'New subscription',
        'value' => ':name has added a new subscription.',
    ],
    Activity::CANCELLED_ORDER->value => [
        'title' => 'Cancelled order',
        'value' => ':name has cancelled an order.',
    ],
    Activity::CANCELLED_SUBSCRIPTION->value => [
        'title' => 'Cancelled subscription',
        'value' => ':name has cancelled a subscription.',
    ],
    Activity::CREATED_CUSTOMER->value => [
        'title' => 'Customer created',
        'value' => ':name has created :customer\'s profile',
    ],
    Activity::DELETED_CUSTOMER->value => ':name has deleted :customer\'s profile',
    Activity::FAILED_PAYMENT->value => [
        'title' => 'Payment refused',
        'value' => ':name has failed a payment.',
    ],
    Activity::PAUSED_SUBSCRIPTION->value => [
        'title' => 'Paused subscription',
        'value' => ':name has paused a subscription.',
    ],
    Activity::PLACED_ORDER->value => [
        'title' => 'New purchase',
        'customer' => ':name has placed a new order of :amount :currency.',
        'user' => ':name has placed a new order of :amount :currency for :customer.',
    ],
    Activity::PURCHASED_GIFT_CARD->value => ':name has purchased a gift card (:code) of :value :currency.',
    Activity::REACTIVATED_SUBSCRIPTION->value => [
        'title' => 'Reactivated subscription',
        'value' => ':name has reactivated a subscription.',
    ],
    Activity::REFUNDED_ORDER->value => [
        'title' => 'Refunded order',
        'value' => ':name has received a refund of :amount :currency.',
    ],
    Activity::RESUMED_SUBSCRIPTION->value => [
        'title' => 'Resumed subscription',
        'value' => ':name has resumed a subscription.',
    ],
    Activity::SENT_GIFT_CARD->value => 'The gift card :code has been sent to :email.',
    Activity::SKIPPED_MENU->value => ':name has skipped the delivery of :date for :subscription.',
    Activity::UNSKIPPED_MENU->value => ':name has unskipped the delivery of :date for :subscription.',
    Activity::UPDATED_CREDITS->value => ':name has a new credits balance of :amount :currency.',
    Activity::UPDATED_CUSTOMER->value => ':name has updated :customer\'s profile',
];