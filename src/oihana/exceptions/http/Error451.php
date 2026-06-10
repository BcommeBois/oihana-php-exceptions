<?php

namespace oihana\exceptions\http ;

/**
 * The HTTP 451 Unavailable For Legal Reasons client error response status code indicates that the user
 * requested a resource that is not available due to legal reasons, such as a web page for which a
 * legal action has been issued.
 *
 * @package oihana\exceptions\http
 * @author  Marc Alcaraz (ekameleon)
 * @since   1.0.0
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/451
 */
class Error451 extends HttpException
{
    public const int    DEFAULT_CODE    = 451 ;
    public const string DEFAULT_MESSAGE = 'Unavailable For Legal Reasons (451)' ;
}
