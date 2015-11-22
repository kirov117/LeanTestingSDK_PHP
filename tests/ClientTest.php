<?php

namespace LeanTesting\API\Client\Test;

use LeanTesting\API\Client\PHPClient;

class ClientTest extends \PHPUnit_Framework_TestCase
{

    public function testClientDefined() {
        $this->assertTrue(class_exists('LeanTesting\API\Client\PHPClient'));
    }




    public function testClientHasAuthObj() {
        $this->assertInstanceOf('LeanTesting\API\Client\Handler\Auth\OAuth2Handler', (new PHPClient)->auth);
    }
    public function testClientHasUserObj() {
        $this->assertInstanceOf('LeanTesting\API\Client\Handler\User\UserHandler', (new PHPClient)->user);
    }
    public function testClientHasProjectsObj() {
        $this->assertInstanceOf('LeanTesting\API\Client\Handler\Project\ProjectsHandler', (new PHPClient)->projects);
    }
    public function testClientHasBugsObj() {
        $this->assertInstanceOf('LeanTesting\API\Client\Handler\Bug\BugsHandler', (new PHPClient)->bugs);
    }
    public function testClientHasAttachmentsObj() {
        $this->assertInstanceOf('LeanTesting\API\Client\Handler\Attachment\AttachmentsHandler', (new PHPClient)->attachments);
    }
    public function testClientHasPlatformObj() {
        $this->assertInstanceOf('LeanTesting\API\Client\Handler\Platform\PlatformHandler', (new PHPClient)->platform);
    }




    public function testInitialEmptyToken() {
        $this->assertFalse((new PHPClient)->getCurrentToken());
    }
    public function testTokenParseStorage() {
        $token_name = '__token__test__';
        $client = new PHPClient;
        $client->attachToken($token_name);
        $this->assertEquals($client->getCurrentToken(), $token_name);
    }
    /**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
    public function testTokenParseNonStr() {
        (new PHPClient)->attachToken(7182381);
    }

}
