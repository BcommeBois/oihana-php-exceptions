<?php

namespace oihana\exceptions\http ;

/**
 * The HTTP 413 Content Too Large client error response status code indicates that the request entity was
 * larger than limits defined by the server. The server might close the connection or return a
 * Retry-After header field.
 *
 * @package oihana\exceptions\http
 * @author  Marc Alcaraz (ekameleon)
 * @since   1.0.0
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/413
 */
class Error413 extends HttpException
{
    public const int    DEFAULT_CODE    = 413 ;
    public const string DEFAULT_MESSAGE = 'Content Too Large (413)' ;
}
