<?php

namespace oihana\exceptions\http ;

/**
 * The HTTP 402 Payment Required client error response status code
 * is a nonstandard response status code reserved for future use.
 *
 * @package oihana\exceptions\http
 * @author  Marc Alcaraz (ekameleon)
 * @since   1.0.0
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/402
 */
class Error402 extends HttpException
{
    public const int    DEFAULT_CODE    = 402 ;
    public const string DEFAULT_MESSAGE = 'Payment Required (402)' ;
}
