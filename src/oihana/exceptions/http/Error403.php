<?php

namespace oihana\exceptions\http ;

/**
 * The HTTP 403 Forbidden client error response status code indicates that the server
 * understood the request but refuses to authorize it.
 *
 * @package oihana\exceptions\http
 * @author  Marc Alcaraz (ekameleon)
 * @since   1.0.0
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/403
 */
class Error403 extends HttpException
{
    public const int    DEFAULT_CODE    = 403 ;
    public const string DEFAULT_MESSAGE = 'Forbidden (403)' ;
}
