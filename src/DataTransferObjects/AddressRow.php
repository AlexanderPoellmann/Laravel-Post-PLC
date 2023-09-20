<?php

namespace AlexanderPoellmann\LaravelPostPlc\DataTransferObjects;

use Spatie\LaravelData\Data;

class AddressRow extends Data
{
    public function __construct(
        public readonly ?string $thirdPartyID,
        public readonly ?string $vatId,
        public readonly string $name1,
        public readonly ?string $name2,
        public readonly ?string $name3,
        public readonly ?string $name4,
        public readonly string $addressLine1,
        public readonly string $houseNumber,
        public readonly ?string $addressLine2,
        public readonly string $postalCode,
        public readonly string $countryID, // ISO-2
        public readonly string $city,
        public readonly ?string $tel1,
        public readonly ?string $tel2,
        public readonly ?string $fax,
        public readonly ?string $email,
        public readonly ?string $homepage,
        public readonly ?string $eoriNumber,
        public readonly ?string $personalTaxNumber,
    ) {
    }
}
