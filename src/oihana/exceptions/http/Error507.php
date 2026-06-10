<?php

namespace oihana\exceptions\http ;

/**
 * The HTTP 507 Insufficient Storage server error response status code indicates that an action could not be
 * performed because the server does not have enough available storage to successfully complete the request.
 *
 * @package oihana\exceptions\http
 * @author  Marc Alcaraz (ekameleon)
 * @since   1.0.0
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/507
 */
class Error507 extends HttpException
{
    public const int    DEFAULT_CODE    = 507 ;
    public const string DEFAULT_MESSAGE = 'Insufficient Storage (507)' ;
}
