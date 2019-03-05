<?php

declare(strict_types=1);

namespace DataTransfer\Primitive;

class StringPrimitive implements PrimitiveInterface
{
    public function getValue()
    {

    }

    public function getType(): string
    {
        return 'string';
    }
}