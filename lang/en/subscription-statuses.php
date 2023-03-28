<?php

use AllDressed\Constants\SubscriptionStatus;

return [
    SubscriptionStatus::ACTIVE->value => 'Active',
    SubscriptionStatus::CANCELLED->value => 'Cancelled',
    SubscriptionStatus::PAUSED->value => 'Paused',
    SubscriptionStatus::PENDING->value => 'Pending',
];