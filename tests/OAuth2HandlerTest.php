<?php

namespace LeanTesting\API\Client\Test;

use LeanTesting\API\Client\PHPClient;

use LeanTesting\API\Client\Handler\Auth\OAuth2Handler;

class OAuth2HandlerTest extends \PHPUnit_Framework_TestCase
{

    public function testOAuth2HandlerDefined() {
        $this->assertTrue(class_exists('LeanTesting\API\Client\Handler\Auth\OAuth2Handler'));
    }
    public function testOAuth2HandlerSelfType() {
        $this->assertInstanceOf('LeanTesting\API\Client\Handler\Auth\OAuth2Handler', new OAuth2Handler(new PHPClient));
    }
    /**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
    public function testOAuth2HandlerGenerateNonStrClientID() {
        (new OAuth2Handler(new PHPClient))->generateAuthLink(1, '', '');
    }
    /**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
    public function testOAuth2HandlerGenerateNonStrRedirectURI() {
        (new OAuth2Handler(new PHPClient))->generateAuthLink('', 1, '');
    }
    /**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
    public function testOAuth2HandlerGenerateNonStrScope() {
        (new OAuth2Handler(new PHPClient))->generateAuthLink('', '', 1);
    }
    /**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
    public function testOAuth2HandlerGenerateNonStrState() {
        (new OAuth2Handler(new PHPClient))->generateAuthLink('', '', '', 1);
    }
    /**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
    public function testOAuth2HandlerExchangeNonStrClientID() {
        $client = new PHPClient;
        $client->debug_return = '{}';
        (new OAuth2Handler(new PHPClient))->exchangeAuthCode(1, '', '', '', '');
    }
    /**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
    public function testOAuth2HandlerExchangeNonStrClientSecret() {
        $client = new PHPClient;
        $client->debug_return = '{}';
        (new OAuth2Handler(new PHPClient))->exchangeAuthCode('', 1, '', '', '');
    }
    /**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
    public function testOAuth2HandlerExchangeNonStrGrantType() {
        $client = new PHPClient;
        $client->debug_return = '{}';
        (new OAuth2Handler(new PHPClient))->exchangeAuthCode('', '', 1, '', '');
    }
    /**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
    public function testOAuth2HandlerExchangeNonStrCode() {
        $client = new PHPClient;
        $client->debug_return = '{}';
        (new OAuth2Handler(new PHPClient))->exchangeAuthCode('', '', '', 1, '');
    }
    /**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
    public function testOAuth2HandlerExchangeNonStrRedirectURI() {
        $client = new PHPClient;
        $client->debug_return = '{}';
        (new OAuth2Handler(new PHPClient))->exchangeAuthCode('', '', '', '', 1);
    }


}

