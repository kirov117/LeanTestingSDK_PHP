<?php

namespace LeanTesting\API\Client;

class ProjectVersionsHandler extends EntityHandler
{
	protected $project_id;

    public function __construct($project_id) {
        $this->project_id = $project_id;
    }

    public function create($fields) {
        //TODO
    }

    public function all($filters = []) {
        //TODO
    }
}
