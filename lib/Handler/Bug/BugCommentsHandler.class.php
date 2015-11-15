<?php

namespace LeanTesting\API\Client;

class BugCommentsHandler extends EntityHandler
{
	protected $bug_id;

	public function __construct($bug_id) {
		$this->bug_id = $bug_id;
	}

    public function all($filters = []) {
        //TODO
    }
}
