<?php

namespace oihana\exceptions\http ;

/**
 * The HTTP 409 Conflict client error response status code indicates a request conflict with the current state of the target resource.
 *
 * @package oihana\exceptions\http
 * @author  Marc Alcaraz (ekameleon)
 * @since   1.0.0
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/409
 */
class Error409 extends HttpException
{
    public const int    DEFAULT_CODE    = 409 ;
    public const string DEFAULT_MESSAGE = 'Conflict (409)' ;
}
