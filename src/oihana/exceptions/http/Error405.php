<?php

namespace oihana\exceptions\http ;

/**
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
class Error405 extends HttpException
{
    public const int    DEFAULT_CODE    = 405 ;
    public const string DEFAULT_MESSAGE = 'Method Not Allowed (405)' ;
}
