<?php

namespace Robodocxs\RobodocxsMiddlewareDtos\DTOs;

use Carbon\Carbon;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class ErpDocumentItemDTO extends Data
{
    public function __construct(
        public string|null         $id = null,
        public string|null         $line_item_number = null,
        public string|null         $name = null,
        public float|null          $quantity = null,
        public float|null          $total_price = null,
        public ProductDTO|null     $product = null,
        public Carbon|null         $valid_until = null,
        public Carbon|null         $delivery_date = null,

        #[DataCollectionOf(CustomDataDTO::class)]
        public DataCollection|null $customs = null,
    )
    {
    }

    public function addCustom($key, $value): self
    {
        if ($this->customs === null) {
            $this->customs = new DataCollection(CustomDataDTO::class, []);
        }

        $this->customs[] = new CustomDataDTO($key, $value);

        return $this;
    }

    public function getCustom(string $key): string|array|null
    {
        if ($this->customs === null || $this->customs->count() === 0) {
            return null;
        }

        foreach ($this->customs as $custom) {
            if ($custom->key === $key) {
                return $custom->value;
            }
        }

        return null;
    }
}
