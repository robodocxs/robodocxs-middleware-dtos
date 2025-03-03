<?php

namespace Robodocxs\RobodocxsMiddlewareDtos\DTOs;

use Spatie\LaravelData\Data;

class CustomDataDTO extends Data
{
    public function __construct(
        public string|null       $key = null,
        public string|array|null $value = null,
    )
    {
    }
}