<?php

namespace oihana\exceptions\http ;

/**
 * The HTTP 508 Loop Detected server error response status code indicates that the server terminated an
 * operation because it encountered an infinite loop while processing a request with Depth: infinity.
 *
 * @package oihana\exceptions\http
 * @author  Marc Alcaraz (ekameleon)
 * @since   1.0.0
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/508
 */
class Error508 extends HttpException
{
    public const int    DEFAULT_CODE    = 508 ;
    public const string DEFAULT_MESSAGE = 'Loop Detected (508)' ;
}
