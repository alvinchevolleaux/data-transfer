<?php

declare(strict_types=1);

namespace Type\DataTransfer;

final class ArrayPrimitive implements PrimitiveInterface
{
    /**
     * @var array
     */
    private $value;

    /**
     * ArrayPrimitive constructor.
     *
     * @param array $array
     */
    private function __construct(array $array)
    {
        $this->value = $array;
    }

    /**
     * @param array $array
     *
     * @return ArrayPrimitive
     */
    public static function fromArray(array $array)
    {
        return new self($array);
    }

    /**
     * @return array
     */
    public function getValue(): array
    {
        $arrayObject = new \ArrayObject($this->value);
        return $arrayObject->getArrayCopy();
    }

    public function getType(): string
    {
        return 'array';
    }
}