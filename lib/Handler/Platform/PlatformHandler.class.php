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

		$types    = new PlatformTypesHandler($origin);
		$devices  = new PlatformDevicesHandler($origin);
		$os       = new PlatformOSHandler($origin);
		$browsers = new PlatformBrowsersHandler($origin);
	}
}
