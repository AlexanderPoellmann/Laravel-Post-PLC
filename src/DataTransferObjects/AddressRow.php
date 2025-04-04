<?php

namespace AlexanderPoellmann\LaravelPostPlc\DataTransferObjects;

use Spatie\LaravelData\Data;

class AddressRow extends Data
{
    public function __construct(
        public readonly ?string $ThirdPartyID,
        public readonly ?string $VatId,
        public readonly string $Name1,
        public readonly ?string $Name2,
        public readonly ?string $Name3,
        public readonly ?string $Name4,
        public readonly string $AddressLine1,
        public readonly string $HouseNumber,
        public readonly ?string $AddressLine2,
        public readonly string $PostalCode,
        public readonly string $CountryID, // ISO-2
        public readonly string $City,
        public readonly ?string $Tel1,
        public readonly ?string $Tel2,
        public readonly ?string $Fax,
        public readonly ?string $Email,
        public readonly ?string $Homepage,
        public readonly ?string $EORINumber,
        public readonly ?string $PersonalTaxNumber,
    ) {}
}
