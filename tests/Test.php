<?php

/*
 *--------------------------------------------------------------------------
 * @Class Test
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

class Test extends TestCase
{
    public function testStaticCall()
    {
        $this->assertEquals(100, Http::continue ()->getStatusCode());
        $this->assertEquals(101, Http::switchingProtocols()->getStatusCode());
        $this->assertEquals(102, Http::processing()->getStatusCode());
        $this->assertEquals(103, Http::earlyHints()->getStatusCode());
        $this->assertEquals(200, Http::ok()->getStatusCode());
        $this->assertEquals(201, Http::created()->getStatusCode());
        $this->assertEquals(202, Http::accepted()->getStatusCode());
        $this->assertEquals(203, Http::nonAuthoritativeInformation()->getStatusCode());
        $this->assertEquals(204, Http::noContent()->getStatusCode());
        $this->assertEquals(205, Http::resetContent()->getStatusCode());
        $this->assertEquals(206, Http::partialContent()->getStatusCode());
        $this->assertEquals(207, Http::multiStatus()->getStatusCode());
        $this->assertEquals(208, Http::alreadyReported()->getStatusCode());
        $this->assertEquals(226, Http::imUsed()->getStatusCode());
        $this->assertEquals(300, Http::multipleChoices()->getStatusCode());
        $this->assertEquals(301, Http::movedPermanently()->getStatusCode());
        $this->assertEquals(302, Http::found()->getStatusCode());
        $this->assertEquals(303, Http::seeOther()->getStatusCode());
        $this->assertEquals(304, Http::notModified()->getStatusCode());
        $this->assertEquals(305, Http::useProxy()->getStatusCode());
        $this->assertEquals(306, Http::reserved()->getStatusCode());
        $this->assertEquals(307, Http::temporaryRedirect()->getStatusCode());
        $this->assertEquals(308, Http::permanentlyRedirect()->getStatusCode());
        $this->assertEquals(400, Http::badRequest()->getStatusCode());
        $this->assertEquals(401, Http::unauthorized()->getStatusCode());
        $this->assertEquals(402, Http::paymentRequired()->getStatusCode());
        $this->assertEquals(403, Http::forbidden()->getStatusCode());
        $this->assertEquals(404, Http::notFound()->getStatusCode());
        $this->assertEquals(405, Http::methodNotAllowed()->getStatusCode());
        $this->assertEquals(406, Http::notAcceptable()->getStatusCode());
        $this->assertEquals(407, Http::proxyAuthenticationRequired()->getStatusCode());
        $this->assertEquals(408, Http::requestTimeout()->getStatusCode());
        $this->assertEquals(409, Http::conflict()->getStatusCode());
        $this->assertEquals(410, Http::gone()->getStatusCode());
        $this->assertEquals(411, Http::lengthRequired()->getStatusCode());
        $this->assertEquals(412, Http::preconditionFailed()->getStatusCode());
        $this->assertEquals(413, Http::requestEntityTooLarge()->getStatusCode());
        $this->assertEquals(414, Http::requestUriTooLong()->getStatusCode());
        $this->assertEquals(415, Http::unsupportedMediaType()->getStatusCode());
        $this->assertEquals(416, Http::requestedRangeNotSatisfiable()->getStatusCode());
        $this->assertEquals(417, Http::expectationFailed()->getStatusCode());
        $this->assertEquals(418, Http::iAmATeapot()->getStatusCode());
        $this->assertEquals(421, Http::misdirectedRequest()->getStatusCode());
        $this->assertEquals(422, Http::unprocessableEntity()->getStatusCode());
        $this->assertEquals(423, Http::locked()->getStatusCode());
        $this->assertEquals(424, Http::failedDependency()->getStatusCode());
        $this->assertEquals(425, Http::tooEarly()->getStatusCode());
        $this->assertEquals(426, Http::upgradeRequired()->getStatusCode());
        $this->assertEquals(428, Http::preconditionRequired()->getStatusCode());
        $this->assertEquals(429, Http::tooManyRequests()->getStatusCode());
        $this->assertEquals(431, Http::requestHeaderFieldsTooLarge()->getStatusCode());
        $this->assertEquals(451, Http::unavailableForLegalReasons()->getStatusCode());
        $this->assertEquals(500, Http::internalServerError()->getStatusCode());
        $this->assertEquals(501, Http::notImplemented()->getStatusCode());
        $this->assertEquals(502, Http::badGateway()->getStatusCode());
        $this->assertEquals(503, Http::serviceUnavailable()->getStatusCode());
        $this->assertEquals(504, Http::gatewayTimeout()->getStatusCode());
        $this->assertEquals(505, Http::versionNotSupported()->getStatusCode());
        $this->assertEquals(506, Http::variantAlsoNegotiatesExperimental()->getStatusCode());
        $this->assertEquals(507, Http::insufficientStorage()->getStatusCode());
        $this->assertEquals(508, Http::loopDetected()->getStatusCode());
        $this->assertEquals(510, Http::notExtended()->getStatusCode());
        $this->assertEquals(511, Http::networkAuthenticationRequired()->getStatusCode());
    }

    public function testConst()
    {
        $this->assertEquals(100, Http::HTTP_CONTINUE);
        $this->assertEquals(101, Http::HTTP_SWITCHING_PROTOCOLS);
        $this->assertEquals(102, Http::HTTP_PROCESSING);
        $this->assertEquals(103, Http::HTTP_EARLY_HINTS);
        $this->assertEquals(200, Http::HTTP_OK);
        $this->assertEquals(201, Http::HTTP_CREATED);
        $this->assertEquals(202, Http::HTTP_ACCEPTED);
        $this->assertEquals(203, Http::HTTP_NON_AUTHORITATIVE_INFORMATION);
        $this->assertEquals(204, Http::HTTP_NO_CONTENT);
        $this->assertEquals(205, Http::HTTP_RESET_CONTENT);
        $this->assertEquals(206, Http::HTTP_PARTIAL_CONTENT);
        $this->assertEquals(207, Http::HTTP_MULTI_STATUS);
        $this->assertEquals(208, Http::HTTP_ALREADY_REPORTED);
        $this->assertEquals(226, Http::HTTP_IM_USED);
        $this->assertEquals(300, Http::HTTP_MULTIPLE_CHOICES);
        $this->assertEquals(301, Http::HTTP_MOVED_PERMANENTLY);
        $this->assertEquals(302, Http::HTTP_FOUND);
        $this->assertEquals(303, Http::HTTP_SEE_OTHER);
        $this->assertEquals(304, Http::HTTP_NOT_MODIFIED);
        $this->assertEquals(305, Http::HTTP_USE_PROXY);
        $this->assertEquals(306, Http::HTTP_RESERVED);
        $this->assertEquals(307, Http::HTTP_TEMPORARY_REDIRECT);
        $this->assertEquals(308, Http::HTTP_PERMANENTLY_REDIRECT);
        $this->assertEquals(400, Http::HTTP_BAD_REQUEST);
        $this->assertEquals(401, Http::HTTP_UNAUTHORIZED);
        $this->assertEquals(402, Http::HTTP_PAYMENT_REQUIRED);
        $this->assertEquals(403, Http::HTTP_FORBIDDEN);
        $this->assertEquals(404, Http::HTTP_NOT_FOUND);
        $this->assertEquals(405, Http::HTTP_METHOD_NOT_ALLOWED);
        $this->assertEquals(406, Http::HTTP_NOT_ACCEPTABLE);
        $this->assertEquals(407, Http::HTTP_PROXY_AUTHENTICATION_REQUIRED);
        $this->assertEquals(408, Http::HTTP_REQUEST_TIMEOUT);
        $this->assertEquals(409, Http::HTTP_CONFLICT);
        $this->assertEquals(410, Http::HTTP_GONE);
        $this->assertEquals(411, Http::HTTP_LENGTH_REQUIRED);
        $this->assertEquals(412, Http::HTTP_PRECONDITION_FAILED);
        $this->assertEquals(413, Http::HTTP_REQUEST_ENTITY_TOO_LARGE);
        $this->assertEquals(414, Http::HTTP_REQUEST_URI_TOO_LONG);
        $this->assertEquals(415, Http::HTTP_UNSUPPORTED_MEDIA_TYPE);
        $this->assertEquals(416, Http::HTTP_REQUESTED_RANGE_NOT_SATISFIABLE);
        $this->assertEquals(417, Http::HTTP_EXPECTATION_FAILED);
        $this->assertEquals(418, Http::HTTP_I_AM_A_TEAPOT);
        $this->assertEquals(421, Http::HTTP_MISDIRECTED_REQUEST);
        $this->assertEquals(422, Http::HTTP_UNPROCESSABLE_ENTITY);
        $this->assertEquals(423, Http::HTTP_LOCKED);
        $this->assertEquals(424, Http::HTTP_FAILED_DEPENDENCY);
        $this->assertEquals(425, Http::HTTP_TOO_EARLY);
        $this->assertEquals(426, Http::HTTP_UPGRADE_REQUIRED);
        $this->assertEquals(428, Http::HTTP_PRECONDITION_REQUIRED);
        $this->assertEquals(429, Http::HTTP_TOO_MANY_REQUESTS);
        $this->assertEquals(431, Http::HTTP_REQUEST_HEADER_FIELDS_TOO_LARGE);
        $this->assertEquals(451, Http::HTTP_UNAVAILABLE_FOR_LEGAL_REASONS);
        $this->assertEquals(500, Http::HTTP_INTERNAL_SERVER_ERROR);
        $this->assertEquals(501, Http::HTTP_NOT_IMPLEMENTED);
        $this->assertEquals(502, Http::HTTP_BAD_GATEWAY);
        $this->assertEquals(503, Http::HTTP_SERVICE_UNAVAILABLE);
        $this->assertEquals(504, Http::HTTP_GATEWAY_TIMEOUT);
        $this->assertEquals(505, Http::HTTP_VERSION_NOT_SUPPORTED);
        $this->assertEquals(506, Http::HTTP_VARIANT_ALSO_NEGOTIATES_EXPERIMENTAL);
        $this->assertEquals(507, Http::HTTP_INSUFFICIENT_STORAGE);
        $this->assertEquals(508, Http::HTTP_LOOP_DETECTED);
        $this->assertEquals(510, Http::HTTP_NOT_EXTENDED);
        $this->assertEquals(511, Http::HTTP_NETWORK_AUTHENTICATION_REQUIRED);
    }
}
