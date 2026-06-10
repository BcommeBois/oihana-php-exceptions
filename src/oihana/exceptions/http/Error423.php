<?php

namespace oihana\exceptions\http ;

/**
 * The HTTP 423 Locked client error response status code indicates that a resource is locked, meaning it
 * can't be accessed. Its response body should contain information in WebDAV format.
 *
 * @package oihana\exceptions\http
 * @author  Marc Alcaraz (ekameleon)
 * @since   1.0.0
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/423
 */
class Error423 extends HttpException
{
    public const int    DEFAULT_CODE    = 423 ;
    public const string DEFAULT_MESSAGE = 'Locked (423)' ;
}
