<?php

namespace Robodocxs\RobodocxsMiddlewareDtos\DTOs;

use Robodocxs\RobodocxsMiddlewareDtos\Enums\ProductType;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class ProductDTO extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $product_code = null,
        public ?string $product_code_2 = null,
        public ?string $name = null,
        public ?string $display_name = null,
        public ?string $search = null,
        public ?string $description = null,
        public string|int|null $base_unit_id = null, // Todo: Rename to base_unit, because id is misleading
        public ?string $ean = null,
        public ?float $unit_price = null,
        public float|int|null $price_quantifier = null,
        public ?float $weight = null,
        public ?string $color = null,
        public ?ProductType $product_type = null,

        #[DataCollectionOf(UnitConversionDTO::class)]
        public ?DataCollection $unit_conversions = null,

        #[DataCollectionOf(ProductReferenceDTO::class)]
        public ?DataCollection $product_references = null,

        #[DataCollectionOf(LocalizedStringDTO::class)]
        public ?DataCollection $localized_display_names = null,
    ) {}
}
