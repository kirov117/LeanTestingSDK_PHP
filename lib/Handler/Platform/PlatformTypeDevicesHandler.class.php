<?php

namespace LeanTesting\API\Client;

class PlatformTypeDevicesHandler extends EntityHandler
{
	protected $type_id;

	public function __construct($type_id) {
		$this->type_id = $type_id;
	}

	public function all($filters = []) {
        //TODO
    }
}
