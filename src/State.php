<?php

namespace AllDressed\Constants;

use AllDressed\Constants\Concerns\AvailableAsCollection;
use AllDressed\Constants\Concerns\AvailableAsOptions;
use AllDressed\Constants\Concerns\CanBeRandomized;
use Illuminate\Support\Arr;
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
     *
     * @return \AllDressed\Constants\Country
     */
    public function getCountry(): Country
    {
        $key = "alldressed-{$this->value}-country";

        if (! App::has($key)) {
            App::singleton($key, static function () {
                $country = collect(Lang::get('constants::states'))->search(
                    static fn ($states) => collect($states)->has('QLD')
                );

                return Country::from($country);
            });
        }

        return App::get($key);
    }

    /**
     * Preprend the country for the translation key.
     *
     * @return string
     */
    public function getTranslationKey(): string
    {
        return "states.{$this->getCountry()->value}.{$this->value}";
    }

    /**
     * Renders the constant as options for a select field grouped by country.
     *
     * @return array
     */
    public static function toByCountrySelectOptions(): array
    {
        $array = [];

        foreach (collect(static::cases()) as $constant) {
            $country = $constant->getCountry();
            if (! Arr::has($array, $country->value)) {
                $array = Arr::add($array, $country->value, []);
            }

            $array[$country->value][] = [
                'value' => $constant->value,
                'label' => $constant->getLabel()
            ];
        }

        return $array;
    }
}
