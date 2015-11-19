<?php

namespace LeanTesting\API\Client;

class ProjectUsersHandler extends EntityHandler
{
	protected $project_id;

    public function __construct($origin, $project_id) {
    	parent::__construct($origin);

        $this->project_id = $project_id;
    }

    public function all($filters = []) {
        parent::all($filters);

        $request = new APIRequest($this->origin, '/v1/projects/' . $this->project_id . '/users', 'GET');
        return new EntityList($this->origin, $request, 'ProjectUser', $filters);
    }
}
