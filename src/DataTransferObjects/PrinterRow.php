<?php

namespace AlexanderPoellmann\LaravelPostPlc\DataTransferObjects;

use AlexanderPoellmann\LaravelPostPlc\Enums\LabelSizes;
use AlexanderPoellmann\LaravelPostPlc\Enums\PaperLayouts;
use AlexanderPoellmann\LaravelPostPlc\Enums\PrinterEncoding;
use AlexanderPoellmann\LaravelPostPlc\Enums\PrinterLanguages;
use Spatie\LaravelData\Data;

class PrinterRow extends Data
{
    public function __construct(
        public readonly ?PrinterLanguages $LanguageID,
        public readonly ?LabelSizes $LabelFormatID,
        public readonly ?PaperLayouts $PaperLayoutID,
        public readonly ?PrinterEncoding $Encoding,
    ) {
    }
}
