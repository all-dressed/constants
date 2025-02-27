<?php

namespace AllDressed\Constants;

use AllDressed\Constants\Concerns\AvailableAsCollection;
use AllDressed\Constants\Concerns\AvailableAsOptions;
use AllDressed\Constants\Concerns\CanBeRandomized;

enum AustraliaState: string
{
    use AvailableAsCollection, AvailableAsOptions, CanBeRandomized;

    case AUSTRALIAN_CAPITAL_TERRITORY = 'ACT';
    case NEW_SOUTH_WALES = 'NSW';
    case NORTHERN_TERRITORY = 'NT';
    case QUEENSLAND = 'QLD';
    case SOUTH_AUSTRALIA = 'SA';
    case TASMANIA = 'TAS';
    case VICTORIA = 'VIC';
    case WESTERN_AUSTRALIA = 'WA';

    /**
     * Retrieve the country of the state.
     */
    public function getCountry(): string
    {
        return 'AU';
    }

    /**
     * Retrieve the abbreviation of the state.
     */
    public function getStateValue(): string
    {
        return $this->value;
    }
}