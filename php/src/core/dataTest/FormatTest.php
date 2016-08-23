<?php

namespace peach\core\dataTest;

use peach\core\data\Format;

/**
 * FormatTest
 *
 * @package peach\core\dataTest
 * @group data
 * @group Format
 */
class FormatTest extends \TestCase {

    private $obj;

    public function setUp() {
        $this->obj = Format::gen();
    }

    public function test_gen() {
        $this->assertEquals('peach\core\data\Format', get_class($this->obj));
    }

    public function test_data() {
        $data = 'hoge';
        $this->assertEquals('peach\core\data\Format', get_class($this->obj->setData($data)));
        $this->assertEquals($data, $this->obj->getData());
    }

    public function test_toArray() {
        $data = 'hoge';
        $this->obj->setData($data);
        $this->assertEquals('peach\core\data\Format', get_class($this->obj->toArray()));
        $this->assertEquals(true, is_array($this->obj->getData()));
        $this->assertEquals(1, count($this->obj->getData()));
    }

}
