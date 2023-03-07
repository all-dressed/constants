<?php

namespace AllDressed\Constants\Concerns;

use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Str;

trait HasTranslation
{
    /**
     * Retrieve the client friendly label of the constant.
     *
     * @return string
     */
    public function getLabel(): string
    {
        $class = Str::of(get_called_class())
            ->classBasename()
            ->plural()
            ->snake('-');

        return Lang::get("constants::{$class}.{$this->value}");
    }
}
