<?php

namespace LeanTesting\API\Client;

class PlatformOS extends Entity
{
	public $versions;

	public function __construct($data) {
		parent::__construct($data);

		$this->versions = new PlatformOSVersionsHandler($this->data['id']);
	}
}