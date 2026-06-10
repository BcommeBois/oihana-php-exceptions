<?php

namespace tests\oihana\exceptions\http ;

use oihana\exceptions\http\Error400;
use PHPUnit\Framework\TestCase;
use Exception;
use Throwable;

class Error400Test extends TestCase
{
    public function testIsInstanceOfException(): void
    {
        $e = new Error400();
        $this->assertInstanceOf(Exception::class, $e);
    }

    public function testDefaultValues(): void
    {
        $e = new Error400();

        $this->assertSame('Bad Request (400)', $e->getMessage());
        $this->assertSame(400, $e->getCode());
        $this->assertNull($e->getPrevious());
    }

    public function testCustomMessageCodeAndPrevious(): void
    {
        $message  = 'Custom bad request message';
        $code     = 999;
        $previous = $this->createStub(Throwable::class);

        $e = new Error400($message, $code, $previous);

        $this->assertSame($message, $e->getMessage());
        $this->assertSame($code, $e->getCode());
        $this->assertSame($previous, $e->getPrevious());
    }
}
