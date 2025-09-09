<?php

namespace Robodocxs\RobodocxsMiddlewareDtos\DTOs;

use Spatie\LaravelData\Data;

class AddressDTO extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $name = null,
        public ?string $contact_name = null,
        public ?string $email = null,
        public ?string $phone = null,
        public ?string $description = null,
        public ?string $street = null,
        public ?string $house_number = null,
        public ?string $zip = null,
        public ?string $city = null,
        public ?string $country_code = null,
        public ?string $type = null,
    ) {}
}
