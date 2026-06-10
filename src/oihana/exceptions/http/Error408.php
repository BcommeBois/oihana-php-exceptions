<?php

namespace oihana\exceptions\http ;

/**
 * The HTTP 408 Request Timeout client error response status code indicates that the server would like to
 * shut down this unused connection. It is sent on an idle connection by some servers,
 * even without any previous request by the client.
 *
 * @package oihana\exceptions\http
 * @author  Marc Alcaraz (ekameleon)
 * @since   1.0.0
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/408
 */
class Error408 extends HttpException
{
    public const int    DEFAULT_CODE    = 408 ;
    public const string DEFAULT_MESSAGE = 'Request Timeout (408)' ;
}
