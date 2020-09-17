<?php

namespace SilverStripe\MockDataObjects;

/**
 * Defines the methods that are injected into the {@link Decimal} class for
 * generating mock data
 *
 * @package silverstripe-mock-data
 * @author Uncle Cheese <unclecheese@leftandmain.com>
 */

use Faker\Generator;


use SilverStripe\ORM\FieldType\DBField;
use SilverStripe\ORM\DataExtension;

class MockDecimalField extends DataExtension
{


    /**
     * Gets a random decimal value
     *
     * @param Faker\Generator
     * @return float
     */
    public function getFakeData(Generator $faker)
    {
        return DBField::create_field("Float", 0)->getFakeData($faker);
    }
}
