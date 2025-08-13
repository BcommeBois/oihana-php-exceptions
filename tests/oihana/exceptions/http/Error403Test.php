<?php


namespace tests\oihana\exceptions\http ;

use oihana\exceptions\http\Error403;
use PHPUnit\Framework\TestCase;
use Exception;
use Throwable;

class Error403Test extends TestCase
{
    public function testIsInstanceOfException(): void
    {
        $e = new Error403();
        $this->assertInstanceOf(Exception::class, $e);
    }

    public function testDefaultValues(): void
    {
        $e = new Error403();

        $this->assertSame('Forbidden error (403)', $e->getMessage());
        $this->assertSame(403, $e->getCode());
        $this->assertNull($e->getPrevious());
    }

    public function testCustomMessageCodeAndPrevious(): void
    {
        $message  = 'Custom not found message';
        $code     = 999;
        $previous = $this->createMock(Throwable::class);

        $e = new Error403($message, $code, $previous);

        $this->assertSame($message, $e->getMessage());
        $this->assertSame($code, $e->getCode());
        $this->assertSame($previous, $e->getPrevious());
    }
}