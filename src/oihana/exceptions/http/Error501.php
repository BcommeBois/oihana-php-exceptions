<?php

namespace oihana\exceptions\http ;

/**
 * The HTTP 501 Not Implemented server error response status code indicates that the server does not
 * support the functionality required to fulfill the request.
 *
 * @package oihana\exceptions\http
 * @author  Marc Alcaraz (ekameleon)
 * @since   1.0.0
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/501
 */
class Error501 extends HttpException
{
    public const int    DEFAULT_CODE    = 501 ;
    public const string DEFAULT_MESSAGE = 'Not Implemented (501)' ;
}
