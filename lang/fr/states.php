<?php

use AllDressed\Constants\Country;
use AllDressed\Constants\State;

return [
    Country::AUSTRALIA->value => [
        State::AUSTRALIAN_CAPITAL_TERRITORY->value => "Territoire de la capitale australienne",
        State::NEW_SOUTH_WALES->value => "Nouvelle-Galles du Sud",
        State::NORTHERN_TERRITORY->value => "Territoire du Nord",
        State::QUEENSLAND->value => "Queensland",
        State::SOUTH_AUSTRALIA->value => "Australie-Méridionale",
        State::TASMANIA->value => "Tasmanie",
        State::VICTORIA->value => "Victoria",
        State::WESTERN_AUSTRALIA->value => "Australie-Occidentale",
    ],

    Country::CANADA->value => [
        State::QUEBEC->value => "Québec",
    ],
];
