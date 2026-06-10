<?php

namespace oihana\exceptions\http ;

/**
 * The HTTP 418 I'm a teapot status code indicates that the server refuses to brew coffee because it is,
 * permanently, a teapot. This is a reference to the Hyper Text Coffee Pot Control Protocol (an April
 * Fools' joke from 1998) and is not expected to be implemented by actual HTTP servers.
 *
 * @package oihana\exceptions\http
 * @author  Marc Alcaraz (ekameleon)
 * @since   1.0.0
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/418
 */
class Error418 extends HttpException
{
    public const int    DEFAULT_CODE    = 418 ;
    public const string DEFAULT_MESSAGE = 'I\'m a teapot (418)' ;
}
