<?php

namespace oihana\exceptions\http ;

/**
 * The HTTP 506 Variant Also Negotiates server error response status code is returned during content
 * negotiation when there is a recursive loop in the process of selecting a resource representation.
 *
 * @package oihana\exceptions\http
 * @author  Marc Alcaraz (ekameleon)
 * @since   1.0.0
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/506
 */
class Error506 extends HttpException
{
    public const int    DEFAULT_CODE    = 506 ;
    public const string DEFAULT_MESSAGE = 'Variant Also Negotiates (506)' ;
}
