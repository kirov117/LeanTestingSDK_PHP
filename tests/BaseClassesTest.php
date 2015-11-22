<?php

namespace LeanTesting\API\Client\Test;

use Mockery;

use LeanTesting\API\Client\PHPClient;

use LeanTesting\API\Client\BaseClass\Entity;
use LeanTesting\API\Client\BaseClass\EntityHandler;

class BaseClassesTest extends \PHPUnit_Framework_TestCase
{

    /* Entity */
    public function testEntityDefined() {
        $this->assertTrue(class_exists('LeanTesting\API\Client\BaseClass\Entity'));
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
        (new EntityHandler(new PHPClient))->all(['include' => '']);
        (new EntityHandler(new PHPClient))->all(['limit' => 10]);
        (new EntityHandler(new PHPClient))->all(['page' => 2]);
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

}
