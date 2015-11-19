<?php

namespace LeanTesting\API\Client;

class PlatformOS extends Entity
{
	public $versions;

	public function __construct($origin, $data) {
		parent::__construct($origin, $data);

		$this->versions = new PlatformOSVersionsHandler($origin, $data['id']);
	}
}
