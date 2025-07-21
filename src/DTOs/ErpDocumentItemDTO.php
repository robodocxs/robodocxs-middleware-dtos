<?php

namespace Robodocxs\RobodocxsMiddlewareDtos\DTOs;

use Carbon\Carbon;
use Spatie\LaravelData\Data;

class ErpDocumentItemDTO extends Data
{
    public function __construct(
        public string|null     $id = null,
        public string|null     $line_item_number = null,
        public string|null     $name = null,
        public float|null      $quantity = null,
        public ProductDTO|null $product = null,
        public Carbon|null     $valid_until = null,
        public Carbon|null     $delivery_date = null,
    )
    {
    }
}
