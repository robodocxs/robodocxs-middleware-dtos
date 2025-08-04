<?php

namespace Robodocxs\RobodocxsMiddlewareDtos\DTOs;

use Carbon\Carbon;
use Robodocxs\RobodocxsMiddlewareDtos\Enums\ErpDocumentType;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class ErpDocumentDTO extends Data
{
    public function __construct(
        public string|null          $id = null,
        public ErpDocumentType|null $erp_document_type = null,
        public string|null          $blanket_order_erp_id = null,
        public string|null          $quote_erp_id = null,
        public float|null           $total_value = null,
        public Carbon|null          $created_at = null,
        public Carbon|null          $valid_until = null,

        public AddressDTO|null      $delivery_address = null,

        #[DataCollectionOf(ErpDocumentItemDTO::class)]
        public DataCollection|null  $items = null,

        #[DataCollectionOf(CustomDataDTO::class)]
        public DataCollection|null  $customs = null,
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
