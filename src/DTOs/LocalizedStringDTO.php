<?php

namespace Robodocxs\RobodocxsMiddlewareDtos\DTOs;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class LocalizedStringDTO extends Data
{
    public function __construct(
        public string|null $locale = null,
        public string|null $value = null,
    )
    {
    }

}