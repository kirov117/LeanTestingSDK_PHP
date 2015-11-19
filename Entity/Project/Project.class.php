<?php

namespace LeanTesting\API\Client;

class Project extends Entity
{
    public $sections;
    public $versions;
    public $users;

    public $bugTypeScheme;
    public $bugStatusScheme;
    public $bugSeverityScheme;
    public $bugReproducibilityScheme;

    public $bugs;

    public function __construct($origin, $data) {
        parent::__construct($origin, $data);

        $this->sections = new ProjectSectionsHandler($origin, $data['id']);
        $this->versions = new ProjectVersionsHandler($origin, $data['id']);
        $this->users    = new ProjectUsersHandler($origin, $data['id']);

        $this->bugTypeScheme            = new ProjectBugTypeSchemeHandler($origin, $data['id']);
        $this->bugStatusScheme          = new ProjectBugStatusSchemeHandler($origin, $data['id']);
        $this->bugSeverityScheme        = new ProjectBugSeveritySchemeHandler($origin, $data['id']);
        $this->bugReproducibilityScheme = new ProjectBugReproducibilitySchemeHandler($origin, $data['id']);

        $this->bugs = new ProjectBugsHandler($origin, $data['id']);
    }
}
