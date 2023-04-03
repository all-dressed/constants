<?php

namespace AllDressed\Constants;

use AllDressed\Constants\Concerns\AvailableAsCollection;
use AllDressed\Constants\Concerns\AvailableAsOptions;
use AllDressed\Constants\Concerns\CanBeRandomized;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Lang;

enum State: string
{
    use AvailableAsCollection, AvailableAsOptions, CanBeRandomized;

    case QUEENSLAND = 'QLD';

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
}
