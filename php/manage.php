<?php

include 'phpunit.phar';

if (!class_exists('PHPUnit_Framework_TestCase')) throw new Exception('No Phpunit');

passthru('./phpunit.phar -c "testTool/phpunit.xml" src/core/dataTest/FormatTest.php');
