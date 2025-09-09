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
        public ?string $id = null,
        public ?ErpDocumentType $erp_document_type = null,
        public ?string $blanket_order_erp_id = null,
        public ?string $quote_erp_id = null,
        public ?float $total_value = null,
        public ?Carbon $created_at = null,
        public ?Carbon $valid_until = null,

        public ?AddressDTO $delivery_address = null,

        #[DataCollectionOf(ErpDocumentItemDTO::class)]
        public ?DataCollection $items = null,

        #[DataCollectionOf(CustomDataDTO::class)]
        public ?DataCollection $customs = null,
    ) {}

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
