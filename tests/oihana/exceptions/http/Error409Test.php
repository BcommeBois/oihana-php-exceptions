<?php


namespace oihana\exceptions\http ;

use PHPUnit\Framework\TestCase;
use Exception;

class Error409Test extends TestCase
{
    public function testIsInstanceOfException(): void
    {
        $e = new Error409();
        $this->assertInstanceOf(Exception::class, $e);
    }

    public function testDefaultValues(): void
    {
        $e = new Error409();

        $this->assertSame('Conflict (409)', $e->getMessage());
        $this->assertSame(409, $e->getCode());
        $this->assertNull($e->getPrevious());
    }
}