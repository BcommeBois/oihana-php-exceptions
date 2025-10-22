<?php

namespace oihana\exceptions\http ;

use Exception;
use Throwable;

/**
 * The HTTP 409 Conflict client error response status code indicates a request conflict with the current state of the target resource.
 *
 * @package oihana\exceptions\http
 * @author  Marc Alcaraz (ekameleon)
 * @since   1.0.0
 *
 * @see https://developer.mozilla.org/fr/docs/Web/HTTP/Reference/Status/409
 */
class Error409 extends Exception
{
    /**
     * Creates a new Error409 instance.
     * @param string $message
     * @param int $code
     * @param Throwable|null $notFound
     */
    public function __construct( string $message = 'Conflict (409)' , int $code = 409 , Throwable|null $notFound = null )
    {
        parent::__construct( $message , $code , $notFound ) ;
    }
}