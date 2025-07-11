<?php

namespace Robodocxs\RobodocxsMiddlewareDtos\DTOs;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Attributes\Validation\Nullable;
use Spatie\LaravelData\Attributes\Validation\StringType;

class ContactDTO extends Data
{
    public function __construct(
        public string|null $id = null,
        public string|null $first_name = null,
        public string|null $last_name = null,
        public string|null $email = null,
        public string|null $phone = null,
    ) {}
}
