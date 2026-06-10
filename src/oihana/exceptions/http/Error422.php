<?php

namespace oihana\exceptions\http ;

/**
 * The HTTP 422 Unprocessable Content client error response status code indicates that the server
 * understood the content type of the request content, and the syntax of the request content was correct,
 * but it was unable to process the contained instructions.
 *
 * @package oihana\exceptions\http
 * @author  Marc Alcaraz (ekameleon)
 * @since   1.0.0
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/422
 */
class Error422 extends HttpException
{
    public const int    DEFAULT_CODE    = 422 ;
    public const string DEFAULT_MESSAGE = 'Unprocessable Content (422)' ;
}
