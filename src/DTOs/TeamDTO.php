<?php

namespace Robodocxs\RobodocxsMiddlewareDtos\DTOs;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class TeamDTO extends Data
{
    public function __construct(
        public string|null         $id = null,
        public string|null         $name = null,

        #[DataCollectionOf(RegionalMappingDTO::class)]
        public DataCollection|null $regional_mappings = null,
    )
    {
    }
}
