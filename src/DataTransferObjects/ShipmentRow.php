<?php

namespace AlexanderPoellmann\LaravelPostPlc\DataTransferObjects;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class ShipmentRow extends Data
{
    public function __construct(
        public readonly string $ClientID,
        public readonly string $OrgUnitID,
        public readonly string $OrgUnitGuid,
        public readonly ?PrinterRow $PrinterObject,
        public readonly ?string $CostCenterThirdPartyID,
        public readonly ?string $Number,
        public readonly string $DeliveryServiceThirdPartyID, // AT-Post product code.
        public readonly ?string $ShippingDateTimeFrom,
        public readonly ?string $ShippingDateTimeTo,
        public readonly AddressRow $OUShipperAddress,
        public readonly ?string $OUShipperReference1,
        public readonly ?string $OUShipperReference2,
        public readonly AddressRow $OURecipientAddress,
        public readonly ?AddressRow $AlternativeReturnOrgUnitAddress,
        public readonly ?string $DeliveryInstruction,
        public readonly ?string $MovementReferenceNumber,
        public readonly ?string $CustomsDescription,
        public readonly ?bool $CustomDataBit1,
        public readonly ?bool $CustomDataBit2,
        public readonly ?string $CustomerProduct, // Can be used to identify the used source system.
        public readonly ?int $ReturnModeID,
        public readonly ?int $ReturnDays,
        public readonly ?int $ReturnOptionID,
        /** @var DataCollection<ColloRow> */
        public readonly ?DataCollection $ColloList,
        /** @var DataCollection<ShipmentDocumentEntry> */
        public readonly ?DataCollection $ShipmentDocumentEntryList,
        /** @var DataCollection<FeatureRow> */
        public readonly ?DataCollection $FeatureList,
        /** @var DataCollection<BusinessDocumentEntry> */
        public readonly ?DataCollection $BusinessDocumentEntryList,
    ) {
    }
}
