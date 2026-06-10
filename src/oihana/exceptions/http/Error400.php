<?php

namespace oihana\exceptions\http ;

/**
 * The HTTP 400 Bad Request client error response status code indicates
 * that the server would not process the request due to something the server considered to be a client error.
 *
 * The reason for a 400 response is typically due to malformed request syntax,
 * invalid request message framing, or deceptive request routing.
 *
 * @package oihana\exceptions\http
 * @author  Marc Alcaraz (ekameleon)
 * @since   1.0.0
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/400
 */
class Error400 extends HttpException
{
    public const int    DEFAULT_CODE    = 400 ;
    public const string DEFAULT_MESSAGE = 'Bad Request (400)' ;
}
