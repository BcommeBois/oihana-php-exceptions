<?php

namespace oihana\exceptions\http ;

/**
 * The HTTP 505 HTTP Version Not Supported server error response status code indicates that the HTTP version
 * used in the request is not supported by the server.
 *
 * @package oihana\exceptions\http
 * @author  Marc Alcaraz (ekameleon)
 * @since   1.0.0
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/505
 */
class Error505 extends HttpException
{
    public const int    DEFAULT_CODE    = 505 ;
    public const string DEFAULT_MESSAGE = 'HTTP Version Not Supported (505)' ;
}
