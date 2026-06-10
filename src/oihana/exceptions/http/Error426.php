<?php

namespace oihana\exceptions\http ;

/**
 * The HTTP 426 Upgrade Required client error response status code indicates that the server refuses to
 * perform the request using the current protocol but might do so after the client upgrades to a different
 * protocol. The server sends an Upgrade header in a 426 response to indicate the required protocols.
 *
 * @package oihana\exceptions\http
 * @author  Marc Alcaraz (ekameleon)
 * @since   1.0.0
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/426
 */
class Error426 extends HttpException
{
    public const int    DEFAULT_CODE    = 426 ;
    public const string DEFAULT_MESSAGE = 'Upgrade Required (426)' ;
}
