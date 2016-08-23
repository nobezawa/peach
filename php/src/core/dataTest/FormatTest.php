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

}
