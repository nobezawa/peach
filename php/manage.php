<?php

include 'phpunit.phar';

if (!class_exists('PHPUnit_Framework_TestCase')) throw new Exception('No Phpunit');
if (count($argv) > 2) {
    echo('Count Over argv'."\n");
    exit;
}

$command = './phpunit.phar -c "testTool/phpunit.xml"';

if (preg_match('/^group=(\w+)$/', $argv[1], $list)) {
    $command .= ' --group='.$list[1] .' src/';
    passthru($command);
    exit;
}

if (preg_match('/^file=(\w+)$/', $argv[1], $list)) {
    $command .= ' '.$list[1];
    passthru($command);
    exit;
}

echo 'No Test';