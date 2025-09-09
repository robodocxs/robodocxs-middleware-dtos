<?php

namespace Robodocxs\RobodocxsMiddlewareDtos\DTOs;

use Spatie\LaravelData\Data;

class LocalizedStringDTO extends Data
{
    public function __construct(
        public ?string $locale = null,
        public ?string $value = null,
    ) {}

}
