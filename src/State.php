<?php

namespace AllDressed\Constants;

use AllDressed\Constants\Concerns\AvailableAsCollection;
use AllDressed\Constants\Concerns\AvailableAsOptions;
use AllDressed\Constants\Concerns\CanBeRandomized;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;

enum State: string
{
    use AvailableAsCollection, AvailableAsOptions, CanBeRandomized;

    /**
     * Get all states from all enums.
     */
    public static function all(): Collection
    {
        return collect([...AustraliaState::cases(), ...CanadaState::cases()]);
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