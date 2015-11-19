<?php

namespace LeanTesting\API\Client;

class PlatformType extends Entity
{
    public $devices;

    public function __construct($origin, $data) {
        parent::__construct($origin, $data);

        $this->devices = new PlatformTypeDevicesHandler($origin, $data['id']);
    }
}
