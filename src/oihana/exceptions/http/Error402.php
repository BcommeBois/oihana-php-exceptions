<?php

namespace oihana\exceptions\http ;

use Exception;
use Throwable;

/**
 * The HTTP 402 Payment Required client error response status code
 * is a nonstandard response status code reserved for future use.
 *
 * @package oihana\exceptions\http
 * @author  Marc Alcaraz (ekameleon)
 * @since   1.0.0
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/402
 */
class Error402 extends Exception
{
    /**
     * Creates a new Error403 instance.
     * @param string $message
     * @param int $code
     * @param Throwable|null $notFound
     */
    public function __construct( string $message = 'Payment Required (402)' , int $code = 402 , Throwable|null $notFound = null )
    {
        parent::__construct( $message , $code , $notFound ) ;
    }
}