<?php

namespace Robodocxs\RobodocxsMiddlewareDtos\DTOs;

use Robodocxs\RobodocxsMiddlewareDtos\Enums\ProductReferenceType;
use Spatie\LaravelData\Data;

class ProductReferenceDTO extends Data
{
    public function __construct(
        public string|null               $id = null,
        public string|null               $product_code = null,
        public ProductReferenceType|null $type = null,
    )
    {
    }
}