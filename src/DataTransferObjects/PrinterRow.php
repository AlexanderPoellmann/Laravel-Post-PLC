<?php

namespace AlexanderPoellmann\LaravelPostPlc\DataTransferObjects;

use Spatie\LaravelData\Data;

class PrinterRow extends Data
{
    public function __construct(
        public readonly ?string $LanguageID,
        public readonly ?string $LabelFormatID,
        public readonly ?string $PaperLayoutID,
        public readonly ?string $Encoding,
    ) {
    }
}
