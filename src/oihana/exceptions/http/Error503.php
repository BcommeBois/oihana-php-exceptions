<?php

namespace oihana\exceptions\http ;

/**
 * The HTTP 503 Service Unavailable server error response status code indicates that the server is not
 * ready to handle the request. Common causes are that the server is down for maintenance or is
 * overloaded. A Retry-After header may indicate how long to wait before retrying.
 *
 * @package oihana\exceptions\http
 * @author  Marc Alcaraz (ekameleon)
 * @since   1.0.0
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/503
 */
class Error503 extends HttpException
{
    public const int    DEFAULT_CODE    = 503 ;
    public const string DEFAULT_MESSAGE = 'Service Unavailable (503)' ;
}
