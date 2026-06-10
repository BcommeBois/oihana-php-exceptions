<?php

namespace oihana\exceptions\http ;

/**
 * The HTTP 417 Expectation Failed client error response status code indicates that the expectation given
 * in the request's Expect header could not be met.
 *
 * @package oihana\exceptions\http
 * @author  Marc Alcaraz (ekameleon)
 * @since   1.0.0
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/417
 */
class Error417 extends HttpException
{
    public const int    DEFAULT_CODE    = 417 ;
    public const string DEFAULT_MESSAGE = 'Expectation Failed (417)' ;
}
