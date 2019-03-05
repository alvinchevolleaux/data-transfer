<?php

declare(strict_types=1);

namespace DataTransfer\Primitive;

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
        if (!is_numeric($value)) {
            throw new \InvalidArgumentException("Non numeric type");
        }

        $this->value = $value;
    }

    public static function fromAny($number) : NumberPrimitive
    {
        if (is_int($number)) {
            return self::fromInteger($number);
        }

        if (is_float($number)) {
            return self::fromFloat($number);
        }

        if (is_string($number)) {
            return new self($number);
        }

        throw new \InvalidArgumentException(
            sprintf("Expecting integer, float or string. Got %s", gettype($number))
        );
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