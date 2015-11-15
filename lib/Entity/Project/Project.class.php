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

    public function __construct($data) {
        parent::__construct($data);

        $this->sections = new ProjectSectionsHandler($this->data['id']);
        $this->versions = new ProjectVersionsHandler($this->data['id']);
        $this->users    = new ProjectUsersHandler($this->data['id']);

        $this->bugTypeScheme            = new ProjectBugTypeSchemeHandler($this->data['id']);
        $this->bugStatusScheme          = new ProjectBugStatusSchemeHandler($this->data['id']);
        $this->bugSeverityScheme        = new ProjectBugSeveritySchemeHandler($this->data['id']);
        $this->bugReproducibilityScheme = new ProjectBugReproducibilitySchemeHandler($this->data['id']);

        $this->bugs = new ProjectBugsHandler($this->data['id']);
    }
}
