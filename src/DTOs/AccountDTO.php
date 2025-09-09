<?php

namespace Robodocxs\RobodocxsMiddlewareDtos\DTOs;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class AccountDTO extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $id_2 = null,
        public ?string $vat_id = null,
        public ?string $ean = null,
        public ?string $name = null,
        public ?string $description = null,
        public ?string $contact = null,
        public ?string $email = null,
        public ?string $segment = null,
        public ?string $segment_2 = null,
        public ?AddressDTO $address = null,

        #[DataCollectionOf(AddressDTO::class)]
        public ?DataCollection $delivery_addresses = null,

        #[DataCollectionOf(AddressDTO::class)]
        public ?DataCollection $invoice_addresses = null,

        #[DataCollectionOf(CustomDataDTO::class)]
        public ?DataCollection $customs = null,
    ) {}
}
