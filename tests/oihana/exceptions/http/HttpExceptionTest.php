<?php

namespace tests\oihana\exceptions\http ;

use oihana\exceptions\http\Error404;
use oihana\exceptions\http\HttpException;
use PHPUnit\Framework\TestCase;
use Exception;
use Throwable;

class HttpExceptionTest extends TestCase
{
    public function testIsInstanceOfException(): void
    {
        $e = new HttpException();
        $this->assertInstanceOf(Exception::class, $e);
    }

    public function testDefaultValues(): void
    {
        $e = new HttpException();

        $this->assertSame('HTTP Error', $e->getMessage());
        $this->assertSame(0, $e->getCode());
        $this->assertNull($e->getPrevious());
    }

    public function testCustomMessageCodeAndPrevious(): void
    {
        $message  = 'Custom http error';
        $code     = 418;
        $previous = $this->createStub(Throwable::class);

        $e = new HttpException($message, $code, $previous);

        $this->assertSame($message, $e->getMessage());
        $this->assertSame($code, $e->getCode());
        $this->assertSame($previous, $e->getPrevious());
    }

    public function testSubclassesAreHttpExceptions(): void
    {
        $this->assertInstanceOf(HttpException::class, new Error404());
    }
}
