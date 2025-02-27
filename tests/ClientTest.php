<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    public function testSayHello()
    {
        $myPackage = new \Isik\FreeKassa\Client();

        $result = $myPackage->sayHello();

        $this->assertEquals("Hello from MyPackage!", $result);
    }
}