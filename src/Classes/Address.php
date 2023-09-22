<?php

namespace AlexanderPoellmann\LaravelPostPlc\Classes;

use AlexanderPoellmann\LaravelPostPlc\DataTransferObjects\AddressRow;

class Address extends PlcBase
{
    public function id(string $id): self
    {
        $this->add('ThirdPartyID', $id);

        return $this;
    }

    public function name1(string $name): self
    {
        $this->add('Name1', $name);

        return $this;
    }

    public function name2(string $name): self
    {
        $this->add('Name2', $name);

        return $this;
    }

    public function name3(string $name): self
    {
        $this->add('Name3', $name);

        return $this;
    }

    public function name4(string $name): self
    {
        $this->add('Name4', $name);

        return $this;
    }

    public function route(string $route): self
    {
        $this->add('AddressLine1', $route);

        return $this;
    }

    public function street_number(string $street_number): self
    {
        $this->add('HouseNumber', $street_number);

        return $this;
    }

    public function extra(string $extra): self
    {
        $this->add('AddressLine2', $extra);

        return $this;
    }

    public function post_code(string $post_code): self
    {
        $this->add('PostalCode', $post_code);

        return $this;
    }

    public function city(string $city): self
    {
        $this->add('City', $city);

        return $this;
    }

    public function country_code(string $country_code): self
    {
        $this->add('CountryID', $country_code);

        return $this;
    }

    public function phone(string $phone): self
    {
        $this->add('Tel1', $phone);

        return $this;
    }

    public function phone_alt(string $phone_alt): self
    {
        $this->add('Tel2', $phone_alt);

        return $this;
    }

    public function fax(string $fax): self
    {
        $this->add('Fax', $fax);

        return $this;
    }

    public function email(string $email): self
    {
        $this->add('Email', $email);

        return $this;
    }

    public function website(string $website): self
    {
        $this->add('Homepage', $website);

        return $this;
    }

    public function vat_id(string $vat_id): self
    {
        $this->add('VatId', $vat_id);

        return $this;
    }

    public function eori(string $eori): self
    {
        $this->add('EORINumber', $eori);

        return $this;
    }

    public function tax_number(string $tax_number): self
    {
        $this->add('PersonalTaxNumber', $tax_number);

        return $this;
    }

    public function get(): AddressRow
    {
        return AddressRow::from($this->row);
    }
}
