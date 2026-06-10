<?php

namespace tests\oihana\exceptions\http ;

use oihana\exceptions\http\Error409;
use PHPUnit\Framework\TestCase;
use Exception;
use Throwable;

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

    public function testCustomMessageCodeAndPrevious(): void
    {
        $message  = 'Custom conflict message';
        $code     = 999;
        $previous = $this->createStub(Throwable::class);

        $e = new Error409($message, $code, $previous);

        $this->assertSame($message, $e->getMessage());
        $this->assertSame($code, $e->getCode());
        $this->assertSame($previous, $e->getPrevious());
    }
}
