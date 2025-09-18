<?php

namespace oihana\exceptions\http ;

use Exception;
use Throwable;

/**
 * The HTTP 400 Bad Request client error response status code indicates
 * that the server would not process the request due to something the server considered to be a client error.
 *
 * The reason for a 400 response is typically due to malformed request syntax,
 * invalid request message framing, or deceptive request routing.
 *
 * @package oihana\exceptions\http
 * @author  Marc Alcaraz (ekameleon)
 * @since   1.0.0
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/400
 */
class Error400 extends Exception
{
    /**
     * Creates a new Error403 instance.
     * @param string $message
     * @param int $code
     * @param Throwable|null $notFound
     */
    public function __construct( string $message = 'Bad Request (400)' , int $code = 400 , Throwable|null $notFound = null )
    {
        parent::__construct( $message , $code , $notFound ) ;
    }
}