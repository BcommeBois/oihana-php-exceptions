<?php

namespace oihana\exceptions\http ;

use Exception;
use Throwable;

/**
 * The HTTP 401 Unauthorized client error response status code indicates that a request
 * was not successful because it lacks valid authentication credentials for the requested resource.
 *
 * @package oihana\exceptions\http
 * @author  Marc Alcaraz (ekameleon)
 * @since   1.0.0
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/401
 */
class Error401 extends Exception
{
    /**
     * Creates a new Error403 instance.
     * @param string $message
     * @param int $code
     * @param Throwable|null $notFound
     */
    public function __construct( string $message = 'Unauthorized (401)' , int $code = 401 , Throwable|null $notFound = null )
    {
        parent::__construct( $message , $code , $notFound ) ;
    }
}