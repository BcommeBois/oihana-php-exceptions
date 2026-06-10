<?php

namespace oihana\exceptions\http ;

/**
 * The HTTP 406 Not Acceptable client error response status code indicates that the server could not
 * produce a response matching the list of acceptable values defined in the request's proactive
 * content negotiation headers and that the server was unwilling to supply a default representation.
 *
 * @package oihana\exceptions\http
 * @author  Marc Alcaraz (ekameleon)
 * @since   1.0.0
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/406
 */
class Error406 extends HttpException
{
    public const int    DEFAULT_CODE    = 406 ;
    public const string DEFAULT_MESSAGE = 'Not Acceptable (406)' ;
}
