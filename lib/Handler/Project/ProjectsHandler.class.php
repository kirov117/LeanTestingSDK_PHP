<?php

namespace LeanTesting\API\Client;

class ProjectsHandler extends EntityHandler
{
    public function create($fields) {
        parent::create($fields);

        $supports = [
        	'name'            => REQUIRED,
        	'organization_id' => OPTIONAL
        ];

        if ($this->enforce($fields, $supports)) {
        	$req = new APIRequest($this->origin, '/v1/projects', 'POST', ['params' => $fields]);
        	return new Project($this->origin, $req->exec());
        }
    }

    public function all($filters = []) {
        parent::all($filters);

        $request = new APIRequest($this->origin, '/v1/projects', 'GET');
		return new EntityList($this->origin, $request, 'Project', $filters);
    }

    public function allArchived($filters = []) {
    	parent::all($filters);

        $request = new APIRequest($this->origin, '/v1/projects/archived', 'GET');
		return new EntityList($this->origin, $request, 'Project', $filters);
    }

    public function find($id) {
        parent::find($id);

    	$req = new APIRequest($this->origin, '/v1/projects/' . $id, 'GET');
        return new Project($this->origin, $req->exec());
    }
}
