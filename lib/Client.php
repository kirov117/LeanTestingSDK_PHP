<?php

namespace LeanTesting\API\Client;

require 'loader.php';

final class PHPClient
{
    protected $access_token = null;

    public $auth;
    public $user;
    public $projects;
    public $bugs;
    public $platform;

    public function __construct() {
        $this->auth     = new OAuth2Handler();
        $this->user     = new UserHandler($this);
        $this->projects = new ProjectsHandler($this);
        $this->bugs     = new BugsHandler($this);
        $this->platform = new PlatformHandler($this);
    }

    public function getCurrentToken() {
        return $this->access_token;
    }

    public function attachToken($access_token) {
        $this->access_token = $access_token;
    }
}
