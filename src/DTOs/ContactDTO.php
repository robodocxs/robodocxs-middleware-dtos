<?php

namespace Robodocxs\RobodocxsMiddlewareDtos\DTOs;

use Spatie\LaravelData\Data;

class ContactDTO extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $first_name = null,
        public ?string $last_name = null,
        public ?string $email = null,
        public ?string $phone = null,
    ) {}
}
