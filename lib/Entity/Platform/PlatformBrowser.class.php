<?php

namespace LeanTesting\API\Client;

class PlatformBrowser extends Entity
{
	public $versions;

	public function __construct($data) {
		parent::__construct($data);

		$this->versions = new PlatformBrowserVersionsHandler($this->data['id']);
	}
}