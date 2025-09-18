<?php

namespace oihana\exceptions\http ;

use Exception;
use Throwable;

/**
 * Throw an 'Method Not Allowed' (405).
 *
 * The HTTP 405 Method Not Allowed client error response status code indicates that the server knows the request method,
 * but the target resource doesn't support this method.
 *
 * The server must generate an Allow header in a 405 response with a
 * list of methods that the target resource currently supports.
 *
 * @package oihana\exceptions\http
 * @author  Marc Alcaraz (ekameleon)
 * @since   1.0.0
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/405
 */
class Error405 extends Exception
{
    /**
     * Creates a new Error405 instance.
     * @param string $message
     * @param int $code
     * @param Throwable|null $notFound
     */
    public function __construct( string $message = 'Method Not Allowed (405)' , int $code = 405 , Throwable|null $notFound = null )
    {
        parent::__construct( $message , $code , $notFound ) ;
    }
}