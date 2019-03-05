<?php

declare(strict_types=1);

namespace Type\DataTransfer;

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