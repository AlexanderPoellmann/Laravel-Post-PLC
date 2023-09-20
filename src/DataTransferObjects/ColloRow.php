<?php

namespace AlexanderPoellmann\LaravelPostPlc\DataTransferObjects;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class ColloRow extends Data
{
    public function __construct(
        public readonly ?float $Weight,
        public readonly ?int $Length,
        public readonly ?int $Width,
        public readonly ?int $Height,
        /** @var DataCollection<ColloCode> */
        public readonly ?DataCollection $ColloCodeList,
        /** @var DataCollection<ColloArticleRow> */
        public readonly ?DataCollection $ColloArticleList,
    ) {
    }
}
