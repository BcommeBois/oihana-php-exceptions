<?php

namespace oihana\exceptions\http ;

/**
 * The HTTP 428 Precondition Required client error response status code indicates that the server requires
 * the request to be conditional. Typically, this means that a required precondition header, such as
 * If-Match, is missing.
 *
 * @package oihana\exceptions\http
 * @author  Marc Alcaraz (ekameleon)
 * @since   1.0.0
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/428
 */
class Error428 extends HttpException
{
    public const int    DEFAULT_CODE    = 428 ;
    public const string DEFAULT_MESSAGE = 'Precondition Required (428)' ;
}
