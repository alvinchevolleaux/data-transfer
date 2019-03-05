<?php

namespace DataTransfer;

use Type\DataTransfer\PrimitiveInterface;

/**
 * @author Alvin Chevolleaux <alvin@thehouseshop.com>
 * @copyright THS Group LTD 2019
 *
 * Class FieldInterface
 */
interface PropertyInterface
{
    public function getPrimitiveType() : PrimitiveInterface;
    public function getValidator() : ValidatorInterface;
}