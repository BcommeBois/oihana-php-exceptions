<?php

namespace oihana\exceptions\http ;

/**
 * The HTTP 401 Unauthorized client error response status code indicates that a request
 * was not successful because it lacks valid authentication credentials for the requested resource.
 *
 * @package oihana\exceptions\http
 * @author  Marc Alcaraz (ekameleon)
 * @since   1.0.0
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/401
 */
class Error401 extends HttpException
{
    public const int    DEFAULT_CODE    = 401 ;
    public const string DEFAULT_MESSAGE = 'Unauthorized (401)' ;
}
