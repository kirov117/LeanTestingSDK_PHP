<?php

namespace LeanTesting\API\Client;

class UserHandler extends EntityHandler
{
    public $organizations;

    public function __construct(PHPClient $origin) {
        parent::__construct($origin);

        $this->organizations = new UserOrganizationsHandler($origin);
    }

    public function getInformation() {
        return (new APIRequest($this->origin, '/v1/me', 'GET'))->exec();
    }
}
