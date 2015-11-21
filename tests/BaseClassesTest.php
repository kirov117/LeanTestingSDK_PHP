<?php

namespace LeanTesting\API\Client\Test;

use LeanTesting\API\Client\PHPClient;

use LeanTesting\API\Client\BaseClass\APIRequest;
use LeanTesting\API\Client\BaseClass\Entity;
use LeanTesting\API\Client\BaseClass\EntityHandler;
use LeanTesting\API\Client\BaseClass\EntityList;

class BaseClassesTest extends \PHPUnit_Framework_TestCase
{




    /* APIRequest */
    public function testAPIRequestDefined() {
        $this->assertTrue(class_exists('LeanTesting\API\Client\BaseClass\APIRequest'));
    }
    public function testAPIRequestSelfType() {
        $this->assertInstanceOf('LeanTesting\API\Client\BaseClass\APIRequest', new APIRequest(new PHPClient, '/', 'GET'));
    }
    /**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
    public function testAPIRequestInstanceNonStrEndpoint() {
        $req = new APIRequest(new PHPClient, 12751, 'GET');
    }
    /**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
    public function testAPIRequestInstanceNonStrMethod() {
        $req = new APIRequest(new PHPClient, '/', 131231);
    }
    public function testAPIRequestInstanceSupportedMethod() {
        $req = new APIRequest(new PHPClient, '/', 'GET', []);
        $req = new APIRequest(new PHPClient, '/', 'POST', []);
        $req = new APIRequest(new PHPClient, '/', 'PUT', []);
        $req = new APIRequest(new PHPClient, '/', 'DELETE', []);
    }
    /**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
    public function testAPIRequestInstanceNonSupportedMethod() {
        $req = new APIRequest(new PHPClient, '/', 'XXX');
    }
    /**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
    public function testAPIRequestInstanceNonArrOpts() {
        $req = new APIRequest(new PHPClient, '/', 'GET', 111223);
    }
    /**
     * @expectedException LeanTesting\API\Client\Exception\SDKBadJSONResponseException
     */
    public function testAPIRequestBadJSONResponse() {
        $client = new PHPClient;
        $client->debug_return = '{xxxxxxx';
        $req = new APIRequest($client, '/', 'GET');
        $resp = $req->exec();
    }
    public function testAPIRequestParseResponse() {
        $mock_resp = '{"x1": 123, "x2_x2": "str::__str", "objx111": {"v1": "v1", "v2": 2, "d": [1,2,"3", []]}}';
        $client = new PHPClient;
        $client->debug_return = $mock_resp;
        $this->assertSame((new APIRequest($client, '/', 'GET'))->exec(), json_decode($mock_resp, true));
    }
    /* END APIRequest */












    /* Entity */
    public function testEntityDefined() {
        $this->assertTrue(class_exists('LeanTesting\API\Client\BaseClass\Entity'));
    }
    public function testEntitySelfType() {
        $this->assertInstanceOf('LeanTesting\API\Client\BaseClass\Entity', new Entity(new PHPClient, ['id' => 1]));
    }
    public function testEntityDataParsing() {
        $data = ['id' => 1];
        $entity = new Entity(new PHPClient, $data);
        $this->assertSame($entity->data, $data);
    }
    /**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
    public function testEntityInstanceNonArrData() {
        $entity = new Entity(new PHPClient, '');
    }
    /**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
    public function testEntityInstanceEmptyData() {
        $entity = new Entity(new PHPClient, []);
    }
    /* END Entity */












    /* EntityHandler */
    public function testEntityHandlerDefined() {
        $this->assertTrue(class_exists('LeanTesting\API\Client\BaseClass\EntityHandler'));
    }
    public function testEntityHandlerSelfType() {
        $this->assertInstanceOf('LeanTesting\API\Client\BaseClass\EntityHandler', new EntityHandler(new PHPClient));
    }
    /**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
    public function testEntityHandlerCreateNonArrFields() {
        (new EntityHandler(new PHPClient))->create('');
    }
    /**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
    public function testEntityHandlerCreateEmptyFields() {
        (new EntityHandler(new PHPClient))->create([]);
    }
    /**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
    public function testEntityHandlerAllNonArrFilters() {
        (new EntityHandler(new PHPClient))->all('');
    }
    /**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     * @expectedExceptionMessage XXXfilterXXX
     */
    public function testEntityHandlerAllInvalidFilters() {
        (new EntityHandler(new PHPClient))->all(['XXXfilterXXX' => 9999]);
    }
    public function testEntityHandlerAllSupportedFilters() {
        $client = new PHPClient;
        $client->debug_return = '{"x": [], "meta": {"pagination": {}}}';
        (new EntityHandler($client))->all(['include' => '']);
        (new EntityHandler($client))->all(['limit' => 10]);
        (new EntityHandler($client))->all(['page' => 2]);
    }
    /**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
    public function testEntityHandlerFindNonIntID() {
        (new EntityHandler(new PHPClient))->find('');
    }
    /**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
    public function testEntityHandlerDeleteNonIntID() {
        (new EntityHandler(new PHPClient))->delete('');
    }
    /**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
    public function testEntityHandlerUpdateNonIntID() {
        (new EntityHandler(new PHPClient))->update('', ['x' => 5]);
    }
    /**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
    public function testEntityHandlerUpdateNonArrFields() {
        (new EntityHandler(new PHPClient))->update(5, '');
    }
    /**
     * @expectedException LeanTesting\API\Client\Exception\SDKInvalidArgException
     */
    public function testEntityHandlerUpdateEmptyFields() {
        (new EntityHandler(new PHPClient))->update(5, []);
    }
    /* END EntityHandler */









    /* EntityList */
    public function testEntityListDefined() {
        $this->assertTrue(class_exists('LeanTesting\API\Client\BaseClass\EntityList'));
    }
    public function testEntityListSelfType() {
        $client = new PHPClient;
        $client->debug_return = '{"x": [], "meta": {"pagination": {}}}';
        $this->assertInstanceOf(
            'LeanTesting\API\Client\BaseClass\EntityList',
            new EntityList($client, new APIRequest($client, '/', 'GET'), 'X')
        );
    }
    /**
     * @expectedException LeanTesting\API\Client\Exception\SDKUnexpectedResponseException
     * @expectedExceptionMessage meta
     */
    public function testEntityListBadRespMissingMeta() {
        $client = new PHPClient;
        $client->debug_return = '{"x": []}';
        $this->assertInstanceOf(
            'LeanTesting\API\Client\BaseClass\EntityList',
            new EntityList($client, new APIRequest($client, '/', 'GET'), 'X')
        );
    }
    /**
     * @expectedException LeanTesting\API\Client\Exception\SDKUnexpectedResponseException
     * @expectedExceptionMessage pagination
     */
    public function testEntityListBadRespMissingMetaPagination() {
        $client = new PHPClient;
        $client->debug_return = '{"x": [], "meta": {}}';
        $this->assertInstanceOf(
            'LeanTesting\API\Client\BaseClass\EntityList',
            new EntityList($client, new APIRequest($client, '/', 'GET'), 'X')
        );
    }
    /**
     * @expectedException LeanTesting\API\Client\Exception\SDKUnexpectedResponseException
     * @expectedExceptionMessage collection
     */
    public function testEntityListBadRespMissingCollection() {
        $client = new PHPClient;
        $client->debug_return = '{"meta": {"pagination": {}}}';
        $this->assertInstanceOf(
            'LeanTesting\API\Client\BaseClass\EntityList',
            new EntityList($client, new APIRequest($client, '/', 'GET'), 'X')
        );
    }
    /**
     * @expectedException LeanTesting\API\Client\Exception\SDKUnexpectedResponseException
     * @expectedExceptionMessage xxy, yyx
     */
    public function testEntityListBadRespMultipleCollections() {
        $client = new PHPClient;
        $client->debug_return = '{"xxy": [], "yyx": [], "meta": {"pagination": {}}}';
        $this->assertInstanceOf(
            'LeanTesting\API\Client\BaseClass\EntityList',
            new EntityList($client, new APIRequest($client, '/', 'GET'), 'X')
        );
    }
    /* END EntityList */

}
