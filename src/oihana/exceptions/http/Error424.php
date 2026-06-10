<?php

namespace oihana\exceptions\http ;

/**
 * The HTTP 424 Failed Dependency client error response status code indicates that the method could not be
 * performed on the resource because the requested action depended on another action, and that action failed.
 *
 * @package oihana\exceptions\http
 * @author  Marc Alcaraz (ekameleon)
 * @since   1.0.0
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/424
 */
class Error424 extends HttpException
{
    public const int    DEFAULT_CODE    = 424 ;
    public const string DEFAULT_MESSAGE = 'Failed Dependency (424)' ;
}
