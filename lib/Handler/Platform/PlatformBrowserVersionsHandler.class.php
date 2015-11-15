<?php

namespace LeanTesting\API\Client;

class PlatformBrowserVersionsHandler extends EntityHandler
{
	protected $browser_id;

	public function __construct($browser_id) {
		$this->browser_id = $browser_id;
	}

	public function all($filters = []) {
        //TODO
    }
}
