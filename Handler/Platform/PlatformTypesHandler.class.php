<?php

namespace LeanTesting\API\Client;

class PlatformTypesHandler extends EntityHandler
{
    public function all($filters = []) {
        parent::all($filters);

        $request = new APIRequest($this->origin, '/v1/platform/types', 'GET');
        return new EntityList($this->origin, $request, 'PlatformType', $filters);
    }

    public function find($id) {
        parent::find($id);

        $req = new APIRequest($this->origin, '/v1/platform/types/' . $id, 'GET');
        return new PlatformType($this->origin, $req->exec());
    }
}
