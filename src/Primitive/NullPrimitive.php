<?php

declare(strict_types=1);

namespace DataTransfer\Primitive;

final class NullPrimitive implements PrimitiveInterface
{
    public static function nullValue()
    {
        return new self();
    }

    public function getValue()
    {
        return null;
    }

    public function getType(): string
    {
        return 'null';
    }
}