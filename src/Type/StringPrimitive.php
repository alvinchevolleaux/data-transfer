<?php

declare(strict_types=1);

namespace Type\DataTransfer;

class StringPrimitive implements PrimitiveInterface
{
    public function getType(): string
    {
        return 'string';
    }
}