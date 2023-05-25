<?php

use AllDressed\Constants\Activity;

return [
    Activity::ADDED_SUBSCRIPTION->value => ':name has added a new subscription.',
    Activity::CANCELLED_SUBSCRIPTION->value => ':name has cancelled a subscription.',
    Activity::PAUSED_SUBSCRIPTION->value => ':name has paused a subscription.',
    Activity::PLACED_ORDER->value => ':name has placed a new order of :value :currency.',
    Activity::REACTIVATED_SUBSCRIPTION->value => ':name has reactivated a subscription.',
    Activity::REFUNDED_ORDER->value => ':name has received a refund of :value :currency.',
    Activity::RESUMED_SUBSCRIPTION->value => ':name has resumed a subscription.',
];
