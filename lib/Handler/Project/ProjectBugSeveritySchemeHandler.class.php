<?php

namespace LeanTesting\API\Client;

class ProjectBugSeveritySchemeHandler extends EntityHandler
{
	protected $project_id;

    public function __construct($project_id) {
        $this->project_id = $project_id;
    }

    public function all($filters = []) {
        //TODO
    }
}
