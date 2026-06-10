<?php

namespace oihana\exceptions\http ;

/**
 * The HTTP 502 Bad Gateway server error response status code indicates that a server was acting as a
 * gateway or proxy and that it received an invalid response from the upstream server.
 *
 * @package oihana\exceptions\http
 * @author  Marc Alcaraz (ekameleon)
 * @since   1.0.0
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/502
 */
class Error502 extends HttpException
{
    public const int    DEFAULT_CODE    = 502 ;
    public const string DEFAULT_MESSAGE = 'Bad Gateway (502)' ;
}
