<?php

namespace AllDressed\Constants;

use AllDressed\Constants\Concerns\AvailableAsCollection;
use AllDressed\Constants\Concerns\AvailableAsOptions;
use AllDressed\Constants\Concerns\CanBeRandomized;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Lang;

enum CanadianState: string
{
    use AvailableAsCollection, AvailableAsOptions, CanBeRandomized;

    case ALBERTA = 'AL';
    case BRITISH_COLUMBIA = 'BC';
    case MANITOBA = 'MB';
    case NEW_BRUNSWICK = 'NB';
    case NEWFOUNDLAND_AND_LABRADOR = 'NL';
    case NOVA_SCOTIA = 'NS';
    case NORTHWEST_TERRITORIES = 'NT';
    case NUNAVUT = 'NU';
    case ONTARIO = 'ON';
    case PRINCE_EDWARD_ISLAND = 'PE';
    case QUEBEC = 'QC';
    case SASKATCHEWAN = 'SK';
    case YUKON = 'YK';


    /**
     * Retrieve the country of the state.
     */
    public function getCountry(): string
    {
        return 'CA';
    }

    /**
     * Retrieve the abbreviation of the state.
     */
    public function getStateValue(): string
    {
        return $this->value;
    }
}