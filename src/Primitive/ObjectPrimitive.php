<?php

declare(strict_types=1);

namespace DataTransfer\Primitive;

class ObjectPrimitive implements PrimitiveInterface
{
    private $value;

    private function __construct(array $value)
    {
        $this->value = $value;
    }

    public function getType(): string
    {
        return 'object';
    }

    public function getValue() : array
    {
        return $this->value;
    }
}