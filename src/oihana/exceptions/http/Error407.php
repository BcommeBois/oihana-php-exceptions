<?php

namespace oihana\exceptions\http ;

/**
 * The HTTP 407 Proxy Authentication Required client error response status code indicates that the request
 * did not succeed because it lacks valid authentication credentials for the proxy server
 * that sits between the client and the server with access to the requested resource.
 *
 * @package oihana\exceptions\http
 * @author  Marc Alcaraz (ekameleon)
 * @since   1.0.0
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/407
 */
class Error407 extends HttpException
{
    public const int    DEFAULT_CODE    = 407 ;
    public const string DEFAULT_MESSAGE = 'Proxy Authentication Required (407)' ;
}
