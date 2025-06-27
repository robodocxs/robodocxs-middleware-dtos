<?php

namespace Robodocxs\RobodocxsMiddlewareDtos\DTOs;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Attributes\Validation\Nullable;
use Spatie\LaravelData\Attributes\Validation\StringType;

class AddressDTO extends Data
{
    public function __construct(
        public string|null $id = null,
        public string|null $name = null,
        public string|null $contact_name = null,
        public string|null $email = null,
        public string|null $phone = null,
        public string|null $description = null,
        public string|null $street = null,
        public string|null $house_number = null,
        public string|null $zip = null,
        public string|null $city = null,
        public string|null $country_code = null,
        public string|null $type = null,
    )
    {
    }
}
