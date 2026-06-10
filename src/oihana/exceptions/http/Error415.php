<?php

namespace oihana\exceptions\http ;

/**
 * The HTTP 415 Unsupported Media Type client error response status code indicates that the server refused
 * to accept the request because the message content format is not supported.
 *
 * @package oihana\exceptions\http
 * @author  Marc Alcaraz (ekameleon)
 * @since   1.0.0
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/415
 */
class Error415 extends HttpException
{
    public const int    DEFAULT_CODE    = 415 ;
    public const string DEFAULT_MESSAGE = 'Unsupported Media Type (415)' ;
}
