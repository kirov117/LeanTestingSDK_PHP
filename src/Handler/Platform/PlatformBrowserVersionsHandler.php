<?php

namespace LeanTesting\API\Client;

class PlatformBrowserVersionsHandler extends EntityHandler
{
    protected $browser_id;

    public function __construct($origin, $browser_id) {
        parent::__construct($origin);

        $this->browser_id = $browser_id;
    }

    public function all($filters = []) {
        parent::all($filters);

        $request = new APIRequest($this->origin, '/v1/platform/browsers/' . $this->browser_id . '/versions', 'GET');
        return new EntityList($this->origin, $request, 'PlatformBrowserVersion', $filters);
    }
}
