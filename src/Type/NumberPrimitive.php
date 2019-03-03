<?php

declare(strict_types=1);

namespace Type\DataTransfer;

class NumberPrimitive implements PrimitiveInterface
{
    /**
     * @var string
     */
    private $value;

    /**
     * NumberPrimitive constructor.
     *
     * @param string $value
     */
    private function __construct(string $value)
    {
        $this->value = $value;
    }

    /**
     * @param int $integer
     *
     * @return NumberPrimitive
     */
    public static function fromInteger(int $integer) : NumberPrimitive
    {
        return new self((string) $integer);
    }

    /**
     * @param float $float
     *
     * @return NumberPrimitive
     */
    public static function fromFloat(float $float) : NumberPrimitive
    {
        return new self((string) $float);
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return 'number';
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
}