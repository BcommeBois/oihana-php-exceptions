<?php

namespace tests\oihana\exceptions\http ;

use oihana\exceptions\http\HttpException;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Exception;
use Throwable;

/**
 * Catalogue test guarding the default message and status code of every HTTP
 * exception in one place.
 *
 * @package oihana\exceptions\http
 * @author  Marc Alcaraz (ekameleon)
 * @since   1.0.0
 */
class HttpStatusExceptionsTest extends TestCase
{
    /**
     * @return array<string,array{0:class-string<HttpException>,1:string,2:int}>
     */
    public static function httpExceptionProvider(): array
    {
        $ns = 'oihana\\exceptions\\http\\';

        $catalogue = [
            [ 'Error400' , 'Bad Request (400)'                     , 400 ] ,
            [ 'Error401' , 'Unauthorized (401)'                    , 401 ] ,
            [ 'Error402' , 'Payment Required (402)'                , 402 ] ,
            [ 'Error403' , 'Forbidden (403)'                       , 403 ] ,
            [ 'Error404' , 'Not found error (404)'                 , 404 ] ,
            [ 'Error405' , 'Method Not Allowed (405)'              , 405 ] ,
            [ 'Error406' , 'Not Acceptable (406)'                  , 406 ] ,
            [ 'Error407' , 'Proxy Authentication Required (407)'   , 407 ] ,
            [ 'Error408' , 'Request Timeout (408)'                 , 408 ] ,
            [ 'Error409' , 'Conflict (409)'                        , 409 ] ,
            [ 'Error410' , 'Gone (410)'                            , 410 ] ,
            [ 'Error411' , 'Length Required (411)'                 , 411 ] ,
            [ 'Error412' , 'Precondition Failed (412)'             , 412 ] ,
            [ 'Error413' , 'Content Too Large (413)'               , 413 ] ,
            [ 'Error414' , 'URI Too Long (414)'                    , 414 ] ,
            [ 'Error415' , 'Unsupported Media Type (415)'          , 415 ] ,
            [ 'Error416' , 'Range Not Satisfiable (416)'           , 416 ] ,
            [ 'Error417' , 'Expectation Failed (417)'              , 417 ] ,
            [ 'Error418' , 'I\'m a teapot (418)'                   , 418 ] ,
            [ 'Error421' , 'Misdirected Request (421)'             , 421 ] ,
            [ 'Error422' , 'Unprocessable Content (422)'           , 422 ] ,
            [ 'Error423' , 'Locked (423)'                          , 423 ] ,
            [ 'Error424' , 'Failed Dependency (424)'               , 424 ] ,
            [ 'Error425' , 'Too Early (425)'                       , 425 ] ,
            [ 'Error426' , 'Upgrade Required (426)'                , 426 ] ,
            [ 'Error428' , 'Precondition Required (428)'           , 428 ] ,
            [ 'Error429' , 'Too Many Requests (429)'               , 429 ] ,
            [ 'Error431' , 'Request Header Fields Too Large (431)' , 431 ] ,
            [ 'Error451' , 'Unavailable For Legal Reasons (451)'   , 451 ] ,
            [ 'Error500' , 'Internal server error (500)'           , 500 ] ,
            [ 'Error501' , 'Not Implemented (501)'                 , 501 ] ,
            [ 'Error502' , 'Bad Gateway (502)'                     , 502 ] ,
            [ 'Error503' , 'Service Unavailable (503)'             , 503 ] ,
            [ 'Error504' , 'Gateway Timeout (504)'                 , 504 ] ,
            [ 'Error505' , 'HTTP Version Not Supported (505)'      , 505 ] ,
            [ 'Error506' , 'Variant Also Negotiates (506)'         , 506 ] ,
            [ 'Error507' , 'Insufficient Storage (507)'            , 507 ] ,
            [ 'Error508' , 'Loop Detected (508)'                   , 508 ] ,
            [ 'Error510' , 'Not Extended (510)'                    , 510 ] ,
            [ 'Error511' , 'Network Authentication Required (511)' , 511 ] ,
        ];

        $data = [];

        foreach ( $catalogue as [ $class , $message , $code ] )
        {
            $data[ $class ] = [ $ns . $class , $message , $code ];
        }

        return $data;
    }

    /**
     * @param class-string<HttpException> $class
     */
    #[DataProvider('httpExceptionProvider')]
    public function testDefaults( string $class , string $message , int $code ): void
    {
        $e = new $class();

        $this->assertInstanceOf( HttpException::class , $e );
        $this->assertInstanceOf( Exception::class , $e );
        $this->assertSame( $message , $e->getMessage() );
        $this->assertSame( $code , $e->getCode() );
        $this->assertNull( $e->getPrevious() );
    }

    /**
     * @param class-string<HttpException> $class
     */
    #[DataProvider('httpExceptionProvider')]
    public function testCustomMessageCodeAndPrevious( string $class , string $message , int $code ): void
    {
        $custom   = 'Custom message';
        $previous = $this->createStub(Throwable::class);

        $e = new $class( $custom , 999 , $previous );

        $this->assertSame( $custom , $e->getMessage() );
        $this->assertSame( 999 , $e->getCode() );
        $this->assertSame( $previous , $e->getPrevious() );
    }
}
