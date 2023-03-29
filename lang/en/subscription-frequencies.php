<?php

use AllDressed\Constants\DeliveryScheduleFrequency;

return [
    1 => 'Daily',
    DeliveryScheduleFrequency::WEEKLY->value => 'Every week',
    DeliveryScheduleFrequency::BIWEEKLY->value => 'Every 2 weeks',
    DeliveryScheduleFrequency::EVERY_FOUR_WEEKS->value => 'Every 4 weeks',
    DeliveryScheduleFrequency::EVERY_EIGHT_WEEKS->value => 'Every 8 weeks',
    'other' => 'Every :number days',
];
