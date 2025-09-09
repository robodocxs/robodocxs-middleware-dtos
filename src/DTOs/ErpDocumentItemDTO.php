<?php

namespace Robodocxs\RobodocxsMiddlewareDtos\DTOs;

use Carbon\Carbon;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class ErpDocumentItemDTO extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $line_item_number = null,
        public ?string $name = null,
        public ?float $quantity = null,
        public ?ProductDTO $product = null,
        public ?Carbon $valid_until = null,
        public ?Carbon $delivery_date = null,

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
