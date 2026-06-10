<?php

namespace oihana\exceptions\http ;

use Exception;
use Throwable;

/**
 * Base class for all HTTP error exceptions.
 *
 * Subclasses only declare their default reason phrase and status code through
 * the {@see HttpException::DEFAULT_MESSAGE} and {@see HttpException::DEFAULT_CODE}
 * constants; the constructor resolves them via late static binding, so a bare
 * `new ErrorXXX()` carries the right defaults while every argument stays
 * overridable. Catch this type to handle any HTTP error at once.
 *
 * @package oihana\exceptions\http
 * @author  Marc Alcaraz (ekameleon)
 * @since   1.0.0
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status
 */
class HttpException extends Exception
{
    /**
     * Creates a new HttpException instance.
     *
     * @param string|null    $message  The error message, or null to use the class default.
     * @param int|null       $code     The HTTP status code, or null to use the class default.
     * @param Throwable|null $previous The previous throwable used for exception chaining.
     */
    public function __construct( ?string $message = null , ?int $code = null , ?Throwable $previous = null )
    {
        parent::__construct( $message ?? static::DEFAULT_MESSAGE , $code ?? static::DEFAULT_CODE , $previous ) ;
    }

    /**
     * The default HTTP status code of the exception.
     */
    public const int DEFAULT_CODE = 0 ;

    /**
     * The default message of the exception.
     */
    public const string DEFAULT_MESSAGE = 'HTTP Error' ;
}
