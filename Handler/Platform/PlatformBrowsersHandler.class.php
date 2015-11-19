<?php

namespace LeanTesting\API\Client;

class PlatformBrowsersHandler extends EntityHandler
{
	public function all($filters = []) {
        parent::all($filters);

        $request = new APIRequest($this->origin, '/v1/platform/browsers', 'GET');
        return new EntityList($this->origin, $request, 'PlatformBrowser', $filters);
    }

    public function find($id) {
    	parent::find($id);

        $req = new APIRequest($this->origin, '/v1/platform/browsers/' . $id, 'GET');
        return new PlatformBrowser($this->origin, $req->exec());
    }
}
