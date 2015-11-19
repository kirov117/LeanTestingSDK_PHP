<?php

namespace LeanTesting\API\Client;

class UserOrganizationsHandler extends EntityHandler
{
    public function all($filters = []) {
        parent::all($filters);

        $request = new APIRequest($this->origin, '/v1/me/organizations', 'GET');
        return new EntityList($this->origin, $request, 'UserOrganization', $filters);
    }
}
