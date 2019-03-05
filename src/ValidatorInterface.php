<?php

namespace DataTransfer;

use Type\DataTransfer\PrimitiveInterface;

/**
 * @author Alvin Chevolleaux <alvin@thehouseshop.com>
 * @copyright THS Group LTD 2019
 *
 * Class ValidatorInterface
 */
interface ValidatorInterface
{
    public function isValid(PrimitiveInterface $type) : bool;
}