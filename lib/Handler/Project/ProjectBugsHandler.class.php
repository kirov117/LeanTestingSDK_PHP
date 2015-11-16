<?php

namespace LeanTesting\API\Client;

class ProjectBugsHandler extends EntityHandler
{
	protected $project_id;

    public function __construct($origin, $project_id) {
        parent::__construct($origin);

        $this->project_id = $project_id;
    }

    public function create($fields) {
        parent::create($fields);

        $supports = [
            'title'              => REQUIRED,
            'status_id'          => REQUIRED,
            'severity_id'        => REQUIRED,
            'project_version'    => REQUIRED,
            'project_version_id' => REQUIRED,
            'project_section_id' => OPTIONAL,
            'type_id'            => OPTIONAL,
            'reproducibility_id' => OPTIONAL,
            'assigned_user_id'   => OPTIONAL,
            'description'        => OPTIONAL,
            'expected_results'   => OPTIONAL,
            'steps'              => OPTIONAL,
            'platform'           => OPTIONAL,
            'device_model'       => OPTIONAL,
            'device_model_id'    => OPTIONAL,
            'os'                 => OPTIONAL,
            'os_version'         => OPTIONAL,
            'os_version_id'      => OPTIONAL,
            'browser_version_id' => OPTIONAL
        ];

        if ($this->enforce($fields, $supports)) {
            $req = new APIRequest(
                $this->origin,
                '/v1/projects/' . $this->project_id . '/bugs',
                'POST',
                ['params' => $fields]
            );

            return new Bug($this->origin, $req->exec());
        }
    }

    public function all($filters = []) {
        parent::all($filters);

        $request = new APIRequest($this->origin, '/v1/projects/' . $this->project_id . '/bugs', 'GET');
        return new EntityList($this->origin, $request, 'Bug', $filters);
    }
}
