<?php

namespace Robodocxs\RobodocxsMiddlewareDtos\DTOs;

use Spatie\LaravelData\Data;

class RegionalMappingDTO extends Data
{
    public function __construct(
        public string|null $country_code = null,
        public string|int|null  $zip = null,
        public string|int|null  $zip_from = null,
        public string|int|null  $zip_to = null,
    )
    {
    }
}