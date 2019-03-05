<?php

namespace DataTransfer;

use Type\DataTransfer\PrimitiveInterface;

/**
 * @author Alvin Chevolleaux <alvin@thehouseshop.com>
 * @copyright THS Group LTD 2019
 *
 * Class Property
 */
class Property
{
    /**
     * @var PrimitiveInterface
     */
    private $primitve;

    /**
     * @var ValidatorInterface
     */
    private $validator;

    private function __construct(ValidatorInterface $validator, PrimitiveInterface $primitve)
    {

    }
}