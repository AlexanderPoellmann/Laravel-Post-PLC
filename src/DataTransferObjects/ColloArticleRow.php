<?php

namespace AlexanderPoellmann\LaravelPostPlc\DataTransferObjects;

use AlexanderPoellmann\LaravelPostPlc\Enums\CustomsOptions;
use AlexanderPoellmann\LaravelPostPlc\Enums\Units;
use Spatie\LaravelData\Data;

class ColloArticleRow extends Data
{
    public function __construct(
        public readonly ?string $ArticleNumber,
        public readonly string $ArticleName,
        public readonly int $Quantity,
        public readonly Units $UnitID,
        public readonly int $HSTariffNumber,
        public readonly string $CountryOfOriginID,
        public readonly float $ValueOfGoodsPerUnit,
        public readonly string $CurrencyID,
        public readonly float $ConsumerUnitNetWeight,
        public readonly CustomsOptions $CustomsOptionID,
    ) {
    }
}
