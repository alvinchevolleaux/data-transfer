<?php

namespace DataTransferTest\Validator;

use DataTransfer\Validator\Maximum;
use PHPUnit\Framework\TestCase;
use DataTransfer\Primitive\NumberPrimitive;

/**
 * @author Alvin Chevolleaux <alvin@thehouseshop.com>
 * @copyright THS Group LTD 2019
 *
 * Class MaximumTest
 */
class MaximumTest extends TestCase
{
    public function testJsonSchemaSpec()
    {
        $jsonSchemaData = file_get_contents(
            __DIR__ . '/../../vendor/json-schema/json-schema-test-suite/tests/draft7/maximum.json'
        );

        $parsedTestData = json_decode($jsonSchemaData, true);
        $testdata = $parsedTestData[0];

        $maximumValidator = Maximum::fromNumberPrimitive(
            NumberPrimitive::fromAny($testdata['schema']['maximum'])
        );

        foreach ($testdata['tests'] as $test) {
            try {
                $number = NumberPrimitive::fromAny($test['data']);
                $this->assertEquals($test['valid'], $maximumValidator->isValid($number));
            } catch (\Exception $e) {
                continue;
            }
        }
    }
}