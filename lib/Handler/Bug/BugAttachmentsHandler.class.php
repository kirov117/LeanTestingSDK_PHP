<?php

namespace LeanTesting\API\Client;

class BugAttachmentsHandler extends EntityHandler
{
	protected $bug_id;

	public function __construct($bug_id) {
		$this->bug_id = $bug_id;
	}

    public function create($fields) {
        //TODO
    }

    public function all($filters = []) {
        //TODO
    }

    public function find($id) {
        //TODO
    }

    public function delete($id) {
        //TODO
    }
}
