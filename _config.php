<?php

use SilverStripe\ORM\FieldType\DBField;
use SilverStripe\Core\Manifest\ClassLoader;
use SilverStripe\Admin\CMSMenu;

if (!class_exists("Faker\Generator")) {
    throw new RuntimeException("The silverstripe-mock-dataobjects module requires the Faker PHP library. You can install it by running 'composer require fzaninotto/faker:1.1.*@dev' in your web root. If you installed this module via composer, make the directory fzaninotto/faker exists in vendor/.");
}

define('MOCK_DATAOBJECTS_DIR', basename(dirname(__FILE__)));


CMSMenu::remove_menu_class(SilverStripe\MockDataObjects\MockChildrenController::class);
