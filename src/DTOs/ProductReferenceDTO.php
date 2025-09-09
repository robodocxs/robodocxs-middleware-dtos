<?php

namespace Robodocxs\RobodocxsMiddlewareDtos\DTOs;

use Robodocxs\RobodocxsMiddlewareDtos\Enums\ProductReferenceType;
use Spatie\LaravelData\Data;

class ProductReferenceDTO extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $product_code = null,
        public ?ProductReferenceType $type = null,
    ) {}
}
