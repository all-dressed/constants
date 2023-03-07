<?php

namespace AllDressed\Constants\Concerns;

use Illuminate\Support\Collection;

trait AvailableAsOptions
{
    use HasTranslation;

    /**
     * Renders the constant as options for a select field.
     *
     * @return \Illuminate\Support\Collection
     */
    public static function toSelectOptions(): Collection
    {
        return collect(static::cases())
            ->map(static fn ($constant) => [
                'label' => $constant->getLabel(),
                'value' => $constant->value,
            ]);
    }
}
