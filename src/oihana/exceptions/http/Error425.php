<?php

namespace oihana\exceptions\http ;

/**
 * The HTTP 425 Too Early client error response status code indicates that the server was unwilling to risk
 * processing a request that might be replayed to avoid potential replay attacks.
 *
 * @package oihana\exceptions\http
 * @author  Marc Alcaraz (ekameleon)
 * @since   1.0.0
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/425
 */
class Error425 extends HttpException
{
    public const int    DEFAULT_CODE    = 425 ;
    public const string DEFAULT_MESSAGE = 'Too Early (425)' ;
}
