<?php


namespace tests\oihana\exceptions ;

use oihana\exceptions\UnsupportedOperationException;
use PHPUnit\Framework\TestCase;
use Exception;

/**
 * An exception thrown when an operation is unsupported.
 *
 * @package oihana\exceptions
 * @author  Marc Alcaraz (ekameleon)
 * @since   1.0.0
 */
class UnsupportedOperationExceptionTest extends TestCase
{
    public function testConstructorSetsMessageAndCode(): void
    {
        $message = 'This operation is not supported.';
        $code    = 123;
        $e       = new UnsupportedOperationException($message, $code);

        $this->assertSame($message, $e->getMessage());
        $this->assertSame($code, $e->getCode());
    }

    public function testPreviousExceptionIsStored(): void
    {
        $previous = new Exception('Previous error');
        $e = new UnsupportedOperationException('Unsupported', 0, $previous);

        $this->assertSame($previous, $e->getPrevious());
    }
}