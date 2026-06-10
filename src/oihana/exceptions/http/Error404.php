<?php

namespace oihana\exceptions\http ;

/**
 * The HTTP 404 Not Found client error response status code indicates that the server cannot
 * find the requested resource. Links that lead to a 404 page are often called
 * broken or dead links and can be subject to link rot.
 *
 * @package oihana\exceptions\http
 * @author  Marc Alcaraz (ekameleon)
 * @since   1.0.0
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/404
 */
class Error404 extends HttpException
{
    public const int    DEFAULT_CODE    = 404 ;
    public const string DEFAULT_MESSAGE = 'Not found error (404)' ;
}
