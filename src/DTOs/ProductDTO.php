<?php

namespace Robodocxs\RobodocxsMiddlewareDtos\DTOs;

use Robodocxs\RobodocxsMiddlewareDtos\Enums\ProductType;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class ProductDTO extends Data
{
    public function __construct(
        public string|null         $id = null,
        public string|null         $product_code = null,
        public string|null         $product_code_2 = null,
        public string|null         $name = null,
        public string|null         $display_name = null,
        public string|null         $search = null,
        public string|null         $description = null,
        public string|int|null     $base_unit_id = null,
        public string|null         $ean = null,
        public float|null          $unit_price = null,
        public float|null          $weight = null,
        public string|null         $color = null,
        public ProductType|null    $product_type = null,

        #[DataCollectionOf(UnitConversionDTO::class)]
        public DataCollection|null $unit_conversions = null,

        #[DataCollectionOf(ProductReferenceDTO::class)]
        public DataCollection|null $product_references = null,

        #[DataCollectionOf(LocalizedStringDTO::class)]
        public DataCollection|null $localized_display_names = null,
    )
    {
    }
}
