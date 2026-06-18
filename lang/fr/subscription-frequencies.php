<?php

use AllDressed\Constants\DeliveryScheduleFrequency;

return [
    1 => 'Quotidien',
    DeliveryScheduleFrequency::WEEKLY->value => 'Chaque semaine',
    DeliveryScheduleFrequency::BIWEEKLY->value => 'Toutes les 2 semaines',
    DeliveryScheduleFrequency::EVERY_FOUR_WEEKS->value => 'Toutes les 4 semaines',
    DeliveryScheduleFrequency::EVERY_EIGHT_WEEKS->value => 'Toutes les 8 semaines',
    'other' => 'Tous les :number jours',
];
