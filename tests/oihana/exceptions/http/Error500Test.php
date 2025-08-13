<?php


namespace tests\oihana\exceptions\http ;

use oihana\exceptions\http\Error500;
use PHPUnit\Framework\TestCase;
use Exception;
use Throwable;

class Error500Test extends TestCase
{
    public function testIsInstanceOfException(): void
    {
        $e = new Error500();
        $this->assertInstanceOf(Exception::class, $e);
    }

    public function testDefaultValues(): void
    {
        $e = new Error500();

        $this->assertSame('Internal server error (500)', $e->getMessage());
        $this->assertSame(500, $e->getCode());
        $this->assertNull($e->getPrevious());
    }

    public function testCustomMessageCodeAndPrevious(): void
    {
        $message  = 'Custom not found message';
        $code     = 999;
        $previous = $this->createMock(Throwable::class);

        $e = new Error500($message, $code, $previous);

        $this->assertSame($message, $e->getMessage());
        $this->assertSame($code, $e->getCode());
        $this->assertSame($previous, $e->getPrevious());
    }
}