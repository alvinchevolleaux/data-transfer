<?php

declare(strict_types=1);

namespace DataTransfer\Primitive;

interface PrimitiveInterface
{
    /**
     * @return string
     */
    public function getType() : string;

    /**
     * @return mixed
     */
    public function getValue();
}