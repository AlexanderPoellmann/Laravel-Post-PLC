<?php

namespace AlexanderPoellmann\LaravelPostPlc\Classes;

abstract class PlcBase
{
    protected array $row = [];

    public function add(string $key, mixed $value): void
    {
        $this->row = array_merge($this->row, [
            $key => $value,
        ]);
    }
}
