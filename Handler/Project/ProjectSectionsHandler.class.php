<?php

namespace LeanTesting\API\Client;

class ProjectSectionsHandler extends EntityHandler
{
    protected $project_id;

    public function __construct($origin, $project_id) {
        parent::__construct($origin);

        $this->project_id = $project_id;
    }

    public function create($fields) {
        parent::create($fields);

        $supports = [
            'name' => REQUIRED
        ];

        if ($this->enforce($fields, $supports)) {
            $req = new APIRequest(
                $this->origin,
                '/v1/projects/' . $this->project_id . '/sections',
                'POST',
                ['params' => $fields]
            );

            return new ProjectSection($this->origin, $req->exec());
        }
    }

    public function all($filters = []) {
        parent::all($filters);

        $request = new APIRequest($this->origin, '/v1/projects/' . $this->project_id . '/sections', 'GET');
        return new EntityList($this->origin, $request, 'ProjectSection', $filters);
    }
}
