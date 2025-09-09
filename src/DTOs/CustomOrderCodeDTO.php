<?php

namespace Robodocxs\RobodocxsMiddlewareDtos\DTOs;

use Spatie\LaravelData\Data;

class CustomOrderCodeDTO extends Data
{
    public function __construct(
        public ?string $product_code = null,
        public ?string $custom_product_code = null,
    ) {}
}
