<?php
// require_once 'PHPUnit/Framework.php';

require_once dirname(__FILE__).'/../Weathermap.class.php';

/**
 * Test class for WeatherMapItem.
 * Generated by PHPUnit on 2010-04-06 at 13:31:51.
 */
class WeatherMapItemTest extends PHPUnit_Framework_TestCase {
    /**
     * @var WeatherMapItem
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new WeatherMapItem;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
    }


    /**
     * @todo Implement testMy_type().
     */
    public function testMy_type() {
        $this->assertEquals($this->object->my_type(), "ITEM");
    }
}
?>
