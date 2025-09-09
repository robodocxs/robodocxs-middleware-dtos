<?php

namespace Robodocxs\RobodocxsMiddlewareDtos\DTOs;

use Spatie\LaravelData\Data;

class UnitConversionDTO extends Data
{
    public function __construct(
        public ?string $unit_id = null,
        public ?float $value = null,
    ) {}
}
