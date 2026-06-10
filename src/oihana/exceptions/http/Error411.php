<?php

namespace oihana\exceptions\http ;

/**
 * The HTTP 411 Length Required client error response status code indicates that the server refused to
 * accept the request without a defined Content-Length header.
 *
 * @package oihana\exceptions\http
 * @author  Marc Alcaraz (ekameleon)
 * @since   1.0.0
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/411
 */
class Error411 extends HttpException
{
    public const int    DEFAULT_CODE    = 411 ;
    public const string DEFAULT_MESSAGE = 'Length Required (411)' ;
}
