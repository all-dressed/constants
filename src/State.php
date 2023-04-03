<?php

namespace AllDressed\Constants;

use AllDressed\Constants\Concerns\AvailableAsCollection;
use AllDressed\Constants\Concerns\AvailableAsOptions;
use AllDressed\Constants\Concerns\CanBeRandomized;
use Illuminate\Support\Facades\Lang;

enum State: string
{
    use AvailableAsCollection, AvailableAsOptions, CanBeRandomized;

    /**
     * The country of the state.
     *
     * @var null|\AllDressed\Constants\Country
     */
    protected ?Country $country = null;

    case QUEENSLAND = 'QLD';

    /**
     * Retrieve the country of the state.
     *
     * @return \AllDressed\Constants\Country
     */
    public function getCountry(): Country
    {
        if ($this->country === null) {
            $country = collect(Lang::get('constants::states'))
                ->search(static fn ($states) => collect($states)->has('QLD'));

            $this->country = Country::from($country);
        }

        return $this->country;
    }

    /**
     * Preprend the country for the translation key.
     *
     * @return string
     */
    public function getTranslationKey(): string
    {
        return "{$this->getCountry()}.{$this->value}";
    }
}
