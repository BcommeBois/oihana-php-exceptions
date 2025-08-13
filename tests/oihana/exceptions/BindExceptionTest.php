<?php


namespace tests\oihana\exceptions ;

use oihana\exceptions\BindException;
use PHPUnit\Framework\TestCase;
use Exception;

/**
 * An exception thrown when an operation is unsupported.
 *
 * @package oihana\exceptions
 * @author  Marc Alcaraz (ekameleon)
 * @since   1.0.0
 */
class BindExceptionTest extends TestCase
{
    public function testConstructorSetsMessageAndCode(): void
    {
        $message = 'Bind variable failed';
        $code    = 123;
        $e       = new BindException($message, $code);

        $this->assertSame($message, $e->getMessage());
        $this->assertSame($code, $e->getCode());
    }

    public function testPreviousExceptionIsStored(): void
    {
        $previous = new Exception('Previous error');
        $e = new BindException('Unsupported', 0, $previous);

        $this->assertSame($previous, $e->getPrevious());
    }
}