<?php

namespace LeanTesting\API\Client;

class PlatformOSVersionsHandler extends EntityHandler
{
    protected $os_id;

    public function __construct($origin, $os_id) {
        parent::__construct($origin);

        $this->os_id = $os_id;
    }

    public function all($filters = []) {
        parent::all($filters);

        $request = new APIRequest($this->origin, '/v1/platform/os/' . $this->os_id . '/versions', 'GET');
        return new EntityList($this->origin, $request, 'PlatformOSVersion', $filters);
    }
}
