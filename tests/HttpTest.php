<?php

/*
 *--------------------------------------------------------------------------
 * @Class Http
 *
 *--------------------------------------------------------------------------
 *
 * @author    weiki
 * @email     happy_gzg@126.com
 * @Licensed  ( http://www.apache.org/licenses/LICENSE-2.0 )
 *--------------------------------------------------------------------------
 */

use PHPUnit\Framework\TestCase;
use Weiki\UnifyCode\Http;

class HttpTest extends TestCase
{
    public function additionMethods()
    {
        return [
            [100, 'continue'],
            [101, 'switchingProtocols'],
            [102, 'processing'],
            [103, 'earlyHints'],
            [200, 'ok'],
            [201, 'created'],
            [202, 'accepted'],
            [203, 'nonAuthoritativeInformation'],
            [204, 'noContent'],
            [205, 'resetContent'],
            [206, 'partialContent'],
            [207, 'multiStatus'],
            [208, 'alreadyReported'],
            [226, 'imUsed'],
            [300, 'multipleChoices'],
            [301, 'movedPermanently'],
            [302, 'found'],
            [303, 'seeOther'],
            [304, 'notModified'],
            [305, 'useProxy'],
            [306, 'reserved'],
            [307, 'temporaryRedirect'],
            [308, 'permanentlyRedirect'],
            [400, 'badRequest'],
            [401, 'unauthorized'],
            [402, 'paymentRequired'],
            [403, 'forbidden'],
            [404, 'notFound'],
            [405, 'methodNotAllowed'],
            [406, 'notAcceptable'],
            [407, 'proxyAuthenticationRequired'],
            [408, 'requestTimeout'],
            [409, 'conflict'],
            [410, 'gone'],
            [411, 'lengthRequired'],
            [412, 'preconditionFailed'],
            [413, 'requestEntityTooLarge'],
            [414, 'requestUriTooLong'],
            [415, 'unsupportedMediaType'],
            [416, 'requestedRangeNotSatisfiable'],
            [417, 'expectationFailed'],
            [418, 'iAmATeapot'],
            [421, 'misdirectedRequest'],
            [422, 'unprocessableEntity'],
            [423, 'locked'],
            [424, 'failedDependency'],
            [425, 'tooEarly'],
            [426, 'upgradeRequired'],
            [428, 'preconditionRequired'],
            [429, 'tooManyRequests'],
            [431, 'requestHeaderFieldsTooLarge'],
            [451, 'unavailableForLegalReasons'],
            [500, 'internalServerError'],
            [501, 'notImplemented'],
            [502, 'badGateway'],
            [503, 'serviceUnavailable'],
            [504, 'gatewayTimeout'],
            [505, 'versionNotSupported'],
            [506, 'variantAlsoNegotiatesExperimental'],
            [507, 'insufficientStorage'],
            [508, 'loopDetected'],
            [510, 'notExtended'],
            [511, 'networkAuthenticationRequired'],
        ];
    }

    /**
     * @dataProvider additionMethods
     */
    public function testConst($code, $method)
    {
        $this->assertTrue(defined(Http::toConst($method)));
    }

    /**
     * @dataProvider additionMethods
     */
    public function testStatusCode($code, $method)
    {
        $this->assertEquals($code, Http::toStatusCode($method));
        $this->assertEquals($code, Http::$method());
    }
}
