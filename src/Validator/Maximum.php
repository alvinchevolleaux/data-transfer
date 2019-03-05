<?php

namespace DataTransfer\Validator;

use DataTransfer\Primitive\NumberPrimitive;
use DataTransfer\Primitive\PrimitiveInterface;
use DataTransfer\ValidatorInterface;

/**
 * @author Alvin Chevolleaux <alvin@thehouseshop.com>
 * @copyright THS Group LTD 2019
 *
 * Class Maximum
 */
class Maximum implements ValidatorInterface
{
    /**
     * @var NumberPrimitive
     */
    private $maximum;

    /**
     * Maximum constructor.
     *
     * @param NumberPrimitive $maximum
     */
    private function __construct(NumberPrimitive $maximum)
    {
        $this->maximum = $maximum;
    }

    /**
     * @param NumberPrimitive $number
     * @return Maximum
     */
    public static function fromNumberPrimitive(NumberPrimitive $number)
    {
        return new self($number);
    }

    /**
     * @param PrimitiveInterface $primitive
     *
     * @return bool
     */
    public function isValid(PrimitiveInterface $primitive): bool
    {
        if ($primitive instanceof NumberPrimitive && $primitive->getValue() > $this->maximum) {
            return false;
        }

        return true;
    }
}