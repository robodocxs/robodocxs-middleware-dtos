<?php

namespace Robodocxs\RobodocxsMiddlewareDtos\DTOs;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Attributes\Validation\Required;
use Spatie\LaravelData\Attributes\Validation\StringType;

class CustomOrderCodeDTO extends Data
{
    public function __construct(
        public string|null $product_code = null,
        public string|null $custom_product_code = null,
    )
    {
    }
}
