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
        return Lang::get("constants::{$this->getTranslationKey()}");
    }

    /**
     * Retrieve the key of the translation.
     *
     * @return string
     */
    public function getTranslationKey(): string
    {
        $class = Str::of(get_called_class())
            ->classBasename()
            ->plural()
            ->snake('-');

        return "{$class}.{$this->value}";
    }
}
