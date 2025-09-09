<?php

namespace Robodocxs\RobodocxsMiddlewareDtos\DTOs;

use Spatie\LaravelData\Data;

class PARequestDTO extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $product_code = null,
        public ?int $quantity = null,
    ) {}
}
