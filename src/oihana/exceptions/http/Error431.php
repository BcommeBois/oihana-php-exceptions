<?php

namespace oihana\exceptions\http ;

/**
 * The HTTP 431 Request Header Fields Too Large client error response status code indicates that the server
 * refuses to process the request because the request's HTTP headers are too long. The request may be
 * resubmitted after reducing the size of the request headers.
 *
 * @package oihana\exceptions\http
 * @author  Marc Alcaraz (ekameleon)
 * @since   1.0.0
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/431
 */
class Error431 extends HttpException
{
    public const int    DEFAULT_CODE    = 431 ;
    public const string DEFAULT_MESSAGE = 'Request Header Fields Too Large (431)' ;
}
