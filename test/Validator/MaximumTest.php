<?php

namespace DataTransferTest\Validator;

use PHPUnit\Framework\TestCase;

/**
 * @author Alvin Chevolleaux <alvin@thehouseshop.com>
 * @copyright THS Group LTD 2019
 *
 * Class MaximumTest
 */
class MaximumTest extends TestCase
{
    public function runSchemaTests()
    {
        $testData = file_get_contents(
            __DIR__ . '/../../vendor/json-schema/json-schema-test-suite/tests/draft7/maximum.json'
        );

        $parsedTestData = json_decode($testData);


    }
}