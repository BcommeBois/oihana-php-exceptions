<?php

namespace tests\oihana\exceptions\http ;

use oihana\exceptions\http\Error405;
use PHPUnit\Framework\TestCase;
use Exception;
use Throwable;

class Error405Test extends TestCase
{
    public function testIsInstanceOfException(): void
    {
        $e = new Error405();
        $this->assertInstanceOf(Exception::class, $e);
    }

    public function testDefaultValues(): void
    {
        $e = new Error405();

        $this->assertSame('Method Not Allowed (405)', $e->getMessage());
        $this->assertSame(405, $e->getCode());
        $this->assertNull($e->getPrevious());
    }

    public function testCustomMessageCodeAndPrevious(): void
    {
        $message  = 'Custom method not allowed message';
        $code     = 999;
        $previous = $this->createStub(Throwable::class);

        $e = new Error405($message, $code, $previous);

        $this->assertSame($message, $e->getMessage());
        $this->assertSame($code, $e->getCode());
        $this->assertSame($previous, $e->getPrevious());
    }
}
