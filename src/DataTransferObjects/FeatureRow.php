<?php

namespace AlexanderPoellmann\LaravelPostPlc\DataTransferObjects;

use AlexanderPoellmann\LaravelPostPlc\Enums\Features;
use Spatie\LaravelData\Data;

class FeatureRow extends Data
{
    public function __construct(
        public readonly Features $ThirdPartyID,
        public readonly ?string $Value1,
        public readonly ?string $Value2,
        public readonly ?string $Value3,
        public readonly ?string $Value4,
    ) {}
}
