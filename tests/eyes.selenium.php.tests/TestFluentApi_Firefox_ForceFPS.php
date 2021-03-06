<?php

namespace Tests\Applitools\Selenium;

require_once ('TestFluentApi.php');

use Facebook\WebDriver\Remote\DesiredCapabilities;

class TestFluentApi_Firefox_ForceFPS extends TestFluentApi
{
    /** @beforeClass */
    public static function setUpClass()
    {
        self::$forceFullPageScreenshot = true;
        self::$testSuitName = "Eyes Selenium SDK - Fluent API";
        parent::setUpClass();
    }

    public function setUp()
    {
        $this->desiredCapabilities = DesiredCapabilities::firefox();
    }
}