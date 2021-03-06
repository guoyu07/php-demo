<?php

declare(strict_types=1);

namespace Example\Tests;

use Example\Example;
use PHPUnit\Framework\TestCase;

class ExampleTestCase extends TestCase
{
    private static $test;

    public static function getTest()
    {
        if (!(self::$test instanceof Example)) {
            self::$test = new Example(['a' => 1]);
        }

        return self::$test;
    }
}
