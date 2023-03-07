<?php

namespace AllDressed\Constants\Concerns;

use Illuminate\Support\Arr;

trait CanBeRandomized
{
    /**
     * Retrieve a random constant from the possible values.
     *
     * @return static
     */
    public static function random(): static
    {
        return Arr::random(static::cases());
    }
}
