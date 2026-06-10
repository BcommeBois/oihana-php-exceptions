<?php

namespace oihana\exceptions\http ;

/**
 * The HTTP 421 Misdirected Request client error response status code indicates that the request was
 * directed to a server that is not able to produce a response.
 *
 * @package oihana\exceptions\http
 * @author  Marc Alcaraz (ekameleon)
 * @since   1.0.0
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/421
 */
class Error421 extends HttpException
{
    public const int    DEFAULT_CODE    = 421 ;
    public const string DEFAULT_MESSAGE = 'Misdirected Request (421)' ;
}
