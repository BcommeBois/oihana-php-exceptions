<?php

namespace oihana\exceptions\http ;

/**
 * The HTTP 504 Gateway Timeout server error response status code indicates that the server, while acting
 * as a gateway or proxy, did not get a response in time from the upstream server in order to complete
 * the request.
 *
 * @package oihana\exceptions\http
 * @author  Marc Alcaraz (ekameleon)
 * @since   1.0.0
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/504
 */
class Error504 extends HttpException
{
    public const int    DEFAULT_CODE    = 504 ;
    public const string DEFAULT_MESSAGE = 'Gateway Timeout (504)' ;
}
