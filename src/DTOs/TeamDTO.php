<?php

namespace Robodocxs\RobodocxsMiddlewareDtos\DTOs;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class TeamDTO extends Data
{
    public function __construct(
        public ?string $id = null,
        public ?string $name = null,

        #[DataCollectionOf(RegionalMappingDTO::class)]
        public ?DataCollection $regional_mappings = null,
    ) {}
}
