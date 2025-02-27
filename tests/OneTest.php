<?php

declare(strict_types=1);

class OneTest extends \PHPUnit\Framework\TestCase
{
    public function testSayHello()
    {
        $myPackage = new \Isik\FreeKassa\Client();

        $result = $myPackage->sayHello();

        $this->assertEquals("Hello from MyPackage!", $result);
    }
}