<?php

namespace oihana\exceptions\http ;

/**
 * The HTTP 416 Range Not Satisfiable client error response status code indicates that a server could not
 * serve the requested ranges. The most likely reason is that the document doesn't contain such ranges,
 * or that the Range header value, though syntactically correct, doesn't make sense.
 *
 * @package oihana\exceptions\http
 * @author  Marc Alcaraz (ekameleon)
 * @since   1.0.0
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/416
 */
class Error416 extends HttpException
{
    public const int    DEFAULT_CODE    = 416 ;
    public const string DEFAULT_MESSAGE = 'Range Not Satisfiable (416)' ;
}
