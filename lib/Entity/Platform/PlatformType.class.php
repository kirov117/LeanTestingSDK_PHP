<?php

namespace LeanTesting\API\Client;

class PlatformType extends Entity
{
	public $devices;

	public function __construct($data) {
		parent::__construct($data);

		$this->devices = new PlatformTypeDevicesHandler($this->data['id']);
	}
}