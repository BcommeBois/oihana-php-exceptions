<?php

namespace tests\oihana\exceptions\http ;

use oihana\exceptions\http\Error401;
use PHPUnit\Framework\TestCase;
use Exception;
use Throwable;

class Error401Test extends TestCase
{
    public function testIsInstanceOfException(): void
    {
        $e = new Error401();
        $this->assertInstanceOf(Exception::class, $e);
    }

    public function testDefaultValues(): void
    {
        $e = new Error401();

        $this->assertSame('Unauthorized (401)', $e->getMessage());
        $this->assertSame(401, $e->getCode());
        $this->assertNull($e->getPrevious());
    }

    public function testCustomMessageCodeAndPrevious(): void
    {
        $message  = 'Custom unauthorized message';
        $code     = 999;
        $previous = $this->createStub(Throwable::class);

        $e = new Error401($message, $code, $previous);

        $this->assertSame($message, $e->getMessage());
        $this->assertSame($code, $e->getCode());
        $this->assertSame($previous, $e->getPrevious());
    }
}
