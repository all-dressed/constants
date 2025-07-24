<?php

use AllDressed\Constants\SubscriptionStatus;

return [
    SubscriptionStatus::ACTIVE->value => 'Active',
    SubscriptionStatus::CANCELLED->value => 'Annulée',
    SubscriptionStatus::PAUSED->value => 'En pause',
    SubscriptionStatus::PENDING->value => 'En attente',
];
