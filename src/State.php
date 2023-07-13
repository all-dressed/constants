<?php

namespace AllDressed\Constants;

use AllDressed\Constants\Concerns\AvailableAsCollection;
use AllDressed\Constants\Concerns\AvailableAsOptions;
use AllDressed\Constants\Concerns\CanBeRandomized;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Lang;

enum State: string
{
    use AvailableAsCollection, AvailableAsOptions, CanBeRandomized;

    case AUSTRALIAN_CAPITAL_TERRITORY = 'ACT';
    case NEW_SOUTH_WALES = 'NSW';
    case NORTHERN_TERRITORY = 'NT';
    case QUEBEC = 'QC';
    case QUEENSLAND = 'QLD';
    case SOUTH_AUSTRALIA = 'SA';
    case TASMANIA = 'TAS';
    case VICTORIA = 'VIC';
    case WESTERN_AUSTRALIA = 'WA';

    /**
     * Retrieve the country of the state.
     */
    public function getCountry(): Country
    {
        $key = "alldressed-{$this->value}-country";

        if (! App::has($key)) {
            App::singleton($key, function () {
                $country = collect(Lang::get('constants::states'))->search(
                    function ($states) {
                        return collect($states)->has($this->value);
                    }
                );

                return Country::from($country);
            });
        }

        return App::get($key);
    }

    /**
     * Preprend the country for the translation key.
     */
    public function getTranslationKey(): string
    {
        return "states.{$this->getCountry()->value}.{$this->value}";
    }

    /**
     * Render the constants as options for a select field grouped by country.
     */
    public static function toCountrySelectorOptions(): Collection
    {
        return static::all()
            ->map(static fn ($state) => [
                'country' => $state->getCountry()->value,
                'label' => $state->getLabel(),
                'value' => $state->value,
            ])
            ->groupBy('country')
            ->map(static fn ($option) => Arr::except($option, 'country'));
    }
}
