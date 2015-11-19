<?php

namespace LeanTesting\API\Client;

class PlatformBrowser extends Entity
{
    public $versions;

    public function __construct($origin, $data) {
        parent::__construct($origin, $data);

        $this->versions = new PlatformBrowserVersionsHandler($origin, $data['id']);
    }
}
