<?php

declare(strict_types=1);

namespace Type\DataTransfer;

final class BooleanPrimitive implements PrimitiveInterface
{
    /**
     * @var bool
     */
    private $value;

    /**
     * Boolean constructor.
     *
     * @param bool $bool
     */
    private function __construct(bool $bool)
    {
        $this->value = $bool;
    }

    /**
     * @param bool $value
     *
     * @return BooleanPrimitive
     */
    public static function fromValue(bool $value) : BooleanPrimitive
    {
        return new self($value);
    }

    public function getValue() : bool
    {
        return $this->value;
    }

    public function getType(): string
    {
        return 'boolean';
    }
}