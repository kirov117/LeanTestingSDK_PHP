<?php

namespace LeanTesting\API\Client;

class PlatformTypeDevicesHandler extends EntityHandler
{
    protected $type_id;

    public function __construct($origin, $type_id) {
        parent::__construct($origin);

        $this->type_id = $type_id;
    }

    public function all($filters = []) {
        parent::all($filters);

        $request = new APIRequest($this->origin, '/v1/platform/types/' . $this->type_id . '/devices', 'GET');
        return new EntityList($this->origin, $request, 'PlatformDevice', $filters);
    }
}
