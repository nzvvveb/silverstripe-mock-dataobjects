<?php

namespace SilverStripe\MockDataObjects;



/**
 * Defines the methods that are injected into the {@link Boolean} class for
 * generating mock data
 *
 * @package silverstripe-mock-data
 * @author Uncle Cheese <unclecheese@leftandmain.com>
 */
use Faker\Generator;
use DataExtension;


class MockBooleanField extends DataExtension
{


    /**
     * Gets a random boolean value
     *
     * @param Faker\Generator
     * @return boolean
     */
    public function getFakeData(Generator $faker)
    {
        return $faker->boolean();
    }
}
