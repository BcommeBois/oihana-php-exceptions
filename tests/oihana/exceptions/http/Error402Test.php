<?php

namespace tests\oihana\exceptions\http ;

use oihana\exceptions\http\Error402;
use PHPUnit\Framework\TestCase;
use Exception;
use Throwable;

class Error402Test extends TestCase
{
    public function testIsInstanceOfException(): void
    {
        $e = new Error402();
        $this->assertInstanceOf(Exception::class, $e);
    }

    public function testDefaultValues(): void
    {
        $e = new Error402();

        $this->assertSame('Payment Required (402)', $e->getMessage());
        $this->assertSame(402, $e->getCode());
        $this->assertNull($e->getPrevious());
    }

    public function testCustomMessageCodeAndPrevious(): void
    {
        $message  = 'Custom payment required message';
        $code     = 999;
        $previous = $this->createStub(Throwable::class);

        $e = new Error402($message, $code, $previous);

        $this->assertSame($message, $e->getMessage());
        $this->assertSame($code, $e->getCode());
        $this->assertSame($previous, $e->getPrevious());
    }
}
