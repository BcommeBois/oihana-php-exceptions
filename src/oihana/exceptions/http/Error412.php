<?php

namespace oihana\exceptions\http ;

/**
 * The HTTP 412 Precondition Failed client error response status code indicates that access to the target
 * resource was denied. This happens with conditional requests when the condition defined by the
 * If-Unmodified-Since or If-None-Match headers is not fulfilled.
 *
 * @package oihana\exceptions\http
 * @author  Marc Alcaraz (ekameleon)
 * @since   1.0.0
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/412
 */
class Error412 extends HttpException
{
    public const int    DEFAULT_CODE    = 412 ;
    public const string DEFAULT_MESSAGE = 'Precondition Failed (412)' ;
}
