<?php

namespace AlexanderPoellmann\LaravelPostPlc\DataTransferObjects;

use Spatie\LaravelData\Data;

class ColloCode extends Data
{
    public function __construct(
        public readonly string $Code,
        public readonly string $NumberTypeID,
        public readonly ?string $OUCarrierThirdPartyID,
    ) {}
}
