<?php


namespace tests\oihana\exceptions\http ;

use oihana\exceptions\http\Error404;
use PHPUnit\Framework\TestCase;
use Exception;
use Throwable;

class Error404Test extends TestCase
{
    public function testIsInstanceOfException(): void
    {
        $e = new Error404();
        $this->assertInstanceOf(Exception::class, $e);
    }

    public function testDefaultValues(): void
    {
        $e = new Error404();

        $this->assertSame('Not found error (404)', $e->getMessage());
        $this->assertSame(404, $e->getCode());
        $this->assertNull($e->getPrevious());
    }

    public function testCustomMessageCodeAndPrevious(): void
    {
        $message  = 'Custom not found message';
        $code     = 999;
        $previous = $this->createMock(Throwable::class);

        $e = new Error404($message, $code, $previous);

        $this->assertSame($message, $e->getMessage());
        $this->assertSame($code, $e->getCode());
        $this->assertSame($previous, $e->getPrevious());
    }
}