<?php

namespace oihana\exceptions\http ;

/**
 * The HTTP 410 Gone client error response status code indicates that the target resource is no longer
 * available at the origin server and that this condition is likely to be permanent.
 *
 * @package oihana\exceptions\http
 * @author  Marc Alcaraz (ekameleon)
 * @since   1.0.0
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/410
 */
class Error410 extends HttpException
{
    public const int    DEFAULT_CODE    = 410 ;
    public const string DEFAULT_MESSAGE = 'Gone (410)' ;
}
