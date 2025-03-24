<?php

namespace Robodocxs\RobodocxsMiddlewareDtos\DTOs;

use Spatie\LaravelData\Data;

class RegionalMappingDTO extends Data
{
    public function __construct(
        public string|null $country_code = null,
        public float|null  $zip = null,
        public float|null  $zip_from = null,
        public float|null  $zip_to = null,
    )
    {
    }
}