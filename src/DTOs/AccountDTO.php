<?php

namespace Robodocxs\RobodocxsMiddlewareDtos\DTOs;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\DataCollection;
use Spatie\LaravelData\Attributes\Validation\Nullable;
use Spatie\LaravelData\Attributes\Validation\StringType;

class AccountDTO extends Data
{
    public function __construct(
        public string|null         $id = null,
        public string|null         $id_2 = null,
        public string|null         $vat_id = null,
        public string|null         $ean = null,
        public string|null         $name = null,
        public string|null         $description = null,
        public string|null         $contact = null,
        public string|null         $email = null,
        public string|null         $segment = null,
        public string|null         $segment_2 = null,
        public AddressDTO|null     $address = null,

        #[DataCollectionOf(AddressDTO::class)]
        public DataCollection|null $delivery_addresses = null,

        #[DataCollectionOf(AddressDTO::class)]
        public DataCollection|null $invoice_addresses = null,

        #[DataCollectionOf(CustomDataDTO::class)]
        public DataCollection|null $customs = null,
    )
    {
    }
}
