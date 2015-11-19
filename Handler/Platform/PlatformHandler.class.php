<?php

namespace LeanTesting\API\Client;

class PlatformHandler extends EntityHandler
{
    public $types;
    public $devices;
    public $os;
    public $browsers;

    public function __construct(PHPClient $origin) {
        parent::__construct($origin);

        $this->types    = new PlatformTypesHandler($origin);
        $this->devices  = new PlatformDevicesHandler($origin);
        $this->os       = new PlatformOSHandler($origin);
        $this->browsers = new PlatformBrowsersHandler($origin);
    }
}