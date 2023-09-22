<?php

namespace AlexanderPoellmann\LaravelPostPlc\Classes;

use AlexanderPoellmann\LaravelPostPlc\DataTransferObjects\ColloRow;

class Collo extends PlcBase
{
    public function height(string $height): self
    {
        $this->add('Height', $height);

        return $this;
    }

    public function width(string $width): self
    {
        $this->add('Width', $width);

        return $this;
    }

    public function length(string $length): self
    {
        $this->add('Length', $length);

        return $this;
    }

    public function weight(float $weight): self
    {
        $this->add('Weight', $weight);

        return $this;
    }

    public function get(): ColloRow
    {
        return ColloRow::from($this->row);
    }
}
