<?php

namespace LeanTesting\API\Client;

class PlatformOSVersionsHandler extends EntityHandler
{
	protected $os_id;

	public function __construct($os_id) {
		$this->os_id = $os_id;
	}

	public function all($filters = []) {
        //TODO
    }
}
