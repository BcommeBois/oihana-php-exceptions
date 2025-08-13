<?php


namespace tests\oihana\exceptions ;

use oihana\exceptions\ValidationException;
use PHPUnit\Framework\TestCase;
use Exception;

/**
 * An exception thrown when an operation is unsupported.
 *
 * @package oihana\exceptions
 * @author  Marc Alcaraz (ekameleon)
 * @since   1.0.0
 */
class ValidationExceptionTest extends TestCase
{
    public function testConstructorSetsMessageAndCode(): void
    {
        $message = 'Invalid';
        $code    = 123;
        $e       = new ValidationException($message, $code);

        $this->assertSame($message, $e->getMessage());
        $this->assertSame($code, $e->getCode());
    }

    public function testPreviousExceptionIsStored(): void
    {
        $previous = new Exception('Previous error');
        $e = new ValidationException('Unsupported', 0, $previous);

        $this->assertSame($previous, $e->getPrevious());
    }
}