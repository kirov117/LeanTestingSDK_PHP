<?php

namespace LeanTesting\API\Client;

class PlatformOSHandler extends EntityHandler
{
	public function all($filters = []) {
        parent::all($filters);

        $request = new APIRequest($this->origin, '/v1/platform/os', 'GET');
        return new EntityList($this->origin, $request, 'PlatformOS', $filters);
    }

    public function find($id) {
    	parent::find($id);

        $req = new APIRequest($this->origin, '/v1/platform/os/' . $id, 'GET');
        return new PlatformOS($this->origin, $req->exec());
    }
}
