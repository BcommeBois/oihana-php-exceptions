<?php

namespace oihana\exceptions\http ;

/**
 * The HTTP 500 Internal Server Error server error response status code indicates that
 * the server encountered an unexpected condition that prevented it from fulfilling the request.
 *
 * @package oihana\exceptions\http
 * @author  Marc Alcaraz (ekameleon)
 * @since   1.0.0
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/500
 */
class Error500 extends HttpException
{
    public const int    DEFAULT_CODE    = 500 ;
    public const string DEFAULT_MESSAGE = 'Internal server error (500)' ;
}
