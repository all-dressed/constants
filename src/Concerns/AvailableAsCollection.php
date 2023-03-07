<?php

namespace AllDressed\Constants\Concerns;

use Illuminate\Support\Collection;

trait AvailableAsCollection
{
    /**
     * Retrieve all the cases of the constant as a collection.
     *
     * @return \Illuminate\Support\Collection
     */
    public static function all(): Collection
    {
        return collect(static::cases());
    }
}
