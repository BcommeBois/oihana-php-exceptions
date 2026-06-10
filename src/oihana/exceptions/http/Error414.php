<?php

namespace oihana\exceptions\http ;

/**
 * The HTTP 414 URI Too Long client error response status code indicates that a URI requested by the
 * client was longer than the server is willing to interpret.
 *
 * @package oihana\exceptions\http
 * @author  Marc Alcaraz (ekameleon)
 * @since   1.0.0
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/414
 */
class Error414 extends HttpException
{
    public const int    DEFAULT_CODE    = 414 ;
    public const string DEFAULT_MESSAGE = 'URI Too Long (414)' ;
}
