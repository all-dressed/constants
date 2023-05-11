<?php

use AllDressed\Constants\Country;
use AllDressed\Constants\State;

return [
    Country::AUSTRALIA->value => [
        State::AUSTRALIAN_CAPITAL_TERRITORY->value => 'Australian Capital Territory',
        State::NEW_SOUTH_WALES->value => 'New South Wales',
        State::NORTHERN_TERRITORY->value => 'Northern Territory',
        State::QUEENSLAND->value => 'Queensland',
        State::SOUTH_AUSTRALIA->value => 'South Australia',
        State::TASMANIA->value => 'Tasmania',
        State::VICTORIA->value => 'Victoria',
        State::WESTERN_AUSTRALIA->value => 'Western Australia',
    ],

    Country::CANADA->value => [
        State::QUEBEC->value => 'Quebec',
    ],
];
