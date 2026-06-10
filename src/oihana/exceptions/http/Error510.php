<?php

namespace oihana\exceptions\http ;

/**
 * The HTTP 510 Not Extended server error response status code is sent when the client request declares an
 * HTTP extension that should be used to process the request, but the extension is not supported by the server.
 *
 * @package oihana\exceptions\http
 * @author  Marc Alcaraz (ekameleon)
 * @since   1.0.0
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/510
 */
class Error510 extends HttpException
{
    public const int    DEFAULT_CODE    = 510 ;
    public const string DEFAULT_MESSAGE = 'Not Extended (510)' ;
}
