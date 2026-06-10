<?php

namespace oihana\exceptions\http ;

/**
 * The HTTP 429 Too Many Requests client error response status code indicates the user has sent too many
 * requests in a given amount of time. This is intended for use with rate-limiting schemes and may
 * include a Retry-After header indicating how long to wait before making a new request.
 *
 * @package oihana\exceptions\http
 * @author  Marc Alcaraz (ekameleon)
 * @since   1.0.0
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/429
 */
class Error429 extends HttpException
{
    public const int    DEFAULT_CODE    = 429 ;
    public const string DEFAULT_MESSAGE = 'Too Many Requests (429)' ;
}
