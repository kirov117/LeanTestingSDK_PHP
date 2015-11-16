<?php

namespace LeanTesting\API\Client;

class BugCommentsHandler extends EntityHandler
{
	protected $bug_id;

	public function __construct($origin, $bug_id) {
		parent::__construct($origin);

		$this->bug_id = $bug_id;
	}

    public function all($filters = []) {
        parent::all($filters);

        $request = new APIRequest($this->origin, '/v1/bugs/' . $this->bug_id . '/comments', 'GET');
        return new EntityList($this->origin, $request, 'BugComment', $filters);
    }
}
