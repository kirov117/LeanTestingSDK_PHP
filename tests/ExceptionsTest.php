<?php

namespace LeanTesting\API\Client\Test;

use LeanTesting\API\Client\Exception\BaseException\SDKException;

use LeanTesting\API\Client\Exception\SDKBadJSONResponseException;
use LeanTesting\API\Client\Exception\SDKDuplicateRequestException;
use LeanTesting\API\Client\Exception\SDKErrorResponseException;
use LeanTesting\API\Client\Exception\SDKIncompleteRequestException;
use LeanTesting\API\Client\Exception\SDKInvalidArgException;
use LeanTesting\API\Client\Exception\SDKMissingArgException;
use LeanTesting\API\Client\Exception\SDKUnexpectedResponseException;
use LeanTesting\API\Client\Exception\SDKUnsupportedRequestException;


class ExceptionsTest extends \PHPUnit_Framework_TestCase
{

    /* SELF TYPE */
    public function testBaseSelfType() {
        $this->assertInstanceOf('LeanTesting\API\Client\Exception\BaseException\SDKException', new SDKException);
    }
    public function testBadJSONResponseSelfType() {
        $this->assertInstanceOf('LeanTesting\API\Client\Exception\SDKBadJSONResponseException', new SDKBadJSONResponseException);
    }
    public function testDuplicateRequestSelfType() {
        $this->assertInstanceOf('LeanTesting\API\Client\Exception\SDKDuplicateRequestException', new SDKDuplicateRequestException);
    }
    public function testErrorResponseSelfType() {
        $this->assertInstanceOf('LeanTesting\API\Client\Exception\SDKErrorResponseException', new SDKErrorResponseException);
    }
    public function testIncompleteRequestSelfType() {
        $this->assertInstanceOf('LeanTesting\API\Client\Exception\SDKIncompleteRequestException', new SDKIncompleteRequestException);
    }
    public function testInvalidArgSelfType() {
        $this->assertInstanceOf('LeanTesting\API\Client\Exception\SDKInvalidArgException', new SDKInvalidArgException);
    }
    public function testMissingArgSelfType() {
        $this->assertInstanceOf('LeanTesting\API\Client\Exception\SDKMissingArgException', new SDKMissingArgException);
    }
    public function testUnexpectedResponseSelfType() {
        $this->assertInstanceOf('LeanTesting\API\Client\Exception\SDKUnexpectedResponseException', new SDKUnexpectedResponseException);
    }
    public function testUnsupportedRequestSelfType() {
        $this->assertInstanceOf('LeanTesting\API\Client\Exception\SDKUnsupportedRequestException', new SDKUnsupportedRequestException);
    }
    /* END SELF TYPE */









    /* RAISE NO ARGS */
    /**
     * @expectedException LeanTesting\API\Client\Exception\BaseException\SDKException
     * @expectedExceptionMessage SDK Error
     */
    public function testBaseRaiseNoArgs() {
        throw new SDKException();
    }
    /**
     * @expectedException LeanTesting\API\Client\Exception\SDKBadJSONResponseException
     * @expectedExceptionMessage SDK Error
     */
    public function testBadJSONResponseRaiseNoArgs() {
        throw new SDKBadJSONResponseException();
    }
    /**
     * @expectedException LeanTesting\API\Client\Exception\SDKDuplicateRequestException
     * @expectedExceptionMessage SDK Error
     */
    public function testDuplicateRequestRaiseNoArgs() {
        throw new SDKDuplicateRequestException();
    }
    /**
     * @expectedException LeanTesting\API\Client\Exception\SDKErrorResponseException
     * @expectedExceptionMessage SDK Error
     */
    public function testErrorResponseRaiseNoArgs() {
        throw new SDKErrorResponseException();
    }
    /**
     * @expectedException LeanTesting\API\Client\Exception\SDKIncompleteRequestException
     * @expectedExceptionMessage SDK Error
     */
    public function testIncompleteRequestRaiseNoArgs() {
        throw new SDKIncompleteRequestException();
    }
    /**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     * @expectedExceptionMessage SDK Error
     */
    public function testInvalidArgRaiseNoArgs() {
        throw new SDKInvalidArgException();
    }
    /**
     * @expectedException LeanTesting\API\Client\Exception\SDKMissingArgException
     * @expectedExceptionMessage SDK Error
     */
    public function testMissingArgRaiseNoArgs() {
        throw new SDKMissingArgException();
    }
    /**
     * @expectedException LeanTesting\API\Client\Exception\SDKUnexpectedResponseException
     * @expectedExceptionMessage SDK Error
     */
    public function testUnexpectedResponseRaiseNoArgs() {
        throw new SDKUnexpectedResponseException();
    }
    /**
     * @expectedException LeanTesting\API\Client\Exception\SDKUnsupportedRequestException
     * @expectedExceptionMessage SDK Error
     */
    public function testUnsupportedRequestRaiseNoArgs() {
        throw new SDKUnsupportedRequestException();
    }
    /* END RAISE NO ARGS */









    /* RAISE WITH STR */
    /**
     * @expectedException LeanTesting\API\Client\Exception\BaseException\SDKException
     * @expectedExceptionMessage XXXmsgXXX
     */
    public function testBaseRaiseWithStr() {
        throw new SDKException('XXXmsgXXX');
    }
    /**
     * @expectedException LeanTesting\API\Client\Exception\SDKBadJSONResponseException
     * @expectedExceptionMessage XXXmsgXXX
     */
    public function testBadJSONResponseRaiseWithStr() {
        throw new SDKBadJSONResponseException('XXXmsgXXX');
    }
    /**
     * @expectedException LeanTesting\API\Client\Exception\SDKDuplicateRequestException
     * @expectedExceptionMessage XXXmsgXXX
     */
    public function testDuplicateRequestRaiseWithStr() {
        throw new SDKDuplicateRequestException('XXXmsgXXX');
    }
    /**
     * @expectedException LeanTesting\API\Client\Exception\SDKErrorResponseException
     * @expectedExceptionMessage XXXmsgXXX
     */
    public function testErrorResponseRaiseWithStr() {
        throw new SDKErrorResponseException('XXXmsgXXX');
    }
    /**
     * @expectedException LeanTesting\API\Client\Exception\SDKIncompleteRequestException
     * @expectedExceptionMessage XXXmsgXXX
     */
    public function testIncompleteRequestRaiseWithStr() {
        throw new SDKIncompleteRequestException('XXXmsgXXX');
    }
    /**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     * @expectedExceptionMessage XXXmsgXXX
     */
    public function testInvalidArgRaiseWithStr() {
        throw new SDKInvalidArgException('XXXmsgXXX');
    }
    /**
     * @expectedException LeanTesting\API\Client\Exception\SDKMissingArgException
     * @expectedExceptionMessage XXXmsgXXX
     */
    public function testMissingArgRaiseWithStr() {
        throw new SDKMissingArgException('XXXmsgXXX');
    }
    /**
     * @expectedException LeanTesting\API\Client\Exception\SDKUnexpectedResponseException
     * @expectedExceptionMessage XXXmsgXXX
     */
    public function testUnexpectedResponseRaiseWithStr() {
        throw new SDKUnexpectedResponseException('XXXmsgXXX');
    }
    /**
     * @expectedException LeanTesting\API\Client\Exception\SDKUnsupportedRequestException
     * @expectedExceptionMessage XXXmsgXXX
     */
    public function testUnsupportedRequestRaiseWithStr() {
        throw new SDKUnsupportedRequestException('XXXmsgXXX');
    }
    /* END RAISE WITH STR */









    /* RAISE WITH ARR */
    /**
     * @expectedException LeanTesting\API\Client\Exception\SDKDuplicateRequestException
     * @expectedExceptionMessage xx, yy, zz
     */
    public function testDuplicateRequestRaiseWithArr() {
        throw new SDKDuplicateRequestException(['xx', 'yy', 'zz']);
    }
    /**
     * @expectedException LeanTesting\API\Client\Exception\SDKIncompleteRequestException
     * @expectedExceptionMessage xx, yy, zz
     */
    public function testIncompleteRequestRaiseWithArr() {
        throw new SDKIncompleteRequestException(['xx', 'yy', 'zz']);
    }
    /**
     * @expectedException LeanTesting\API\Client\Exception\SDKUnsupportedRequestException
     * @expectedExceptionMessage xx, yy, zz
     */
    public function testUnsupportedRequestRaiseWithArr() {
        throw new SDKUnsupportedRequestException(['xx', 'yy', 'zz']);
    }
    /* END WITH ARR */

}
