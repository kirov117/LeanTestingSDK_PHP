<?php

namespace LeanTesting\API\Client;

class PlatformDevicesHandler extends EntityHandler
{
    public function find($id) {
    	parent::find($id);

        $req = new APIRequest($this->origin, '/v1/platform/devices/' . $id, 'GET');
        return new PlatformDevice($this->origin, $req->exec());
    }
}
