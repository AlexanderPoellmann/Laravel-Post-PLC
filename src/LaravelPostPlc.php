<?php

namespace AlexanderPoellmann\LaravelPostPlc;

use AlexanderPoellmann\LaravelPostPlc\Enums\ServiceMethods;
use RicorocksDigitalAgency\Soap\Facades\Soap;
use Spatie\LaravelData\Data;

class LaravelPostPlc
{
    protected string $endpoint;

    protected string $identifier;

    protected string $client_id;

    protected string $org_unit_id;

    protected string $org_unit_guid;

    protected bool $sandbox;

    public function __construct()
    {
        $this->identifier = config('services.post-plc.identifier', 'PLC-Test');
        $this->client_id = config('services.post-plc.client-id');
        $this->org_unit_id = config('services.post-plc.org-unit-id');
        $this->org_unit_guid = config('services.post-plc.org-unit-guid');
        $this->sandbox = config('services.post-plc.sandbox', false);
    }

    public function endpoint(): string
    {
        return $this->sandbox ? 'https://abn-plc-ecommerce-api.post.at/api/v1/' : 'https://plc-ecommerce-api.post.at/api/v1/';
    }

    protected function call(ServiceMethods $method, Data $data): string
    {
        info('[Post PLC] Given data.', $data->toArray());

        return Soap::to($this->endpoint)
            ->call($method, $data->toArray());
    }
}
