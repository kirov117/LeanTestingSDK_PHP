<?php

namespace LeanTesting\API\Client;

require 'loader.php';

/**
 *
 * Lean Testing PHP Client SDK
 *
 * @link https://leantesting.com/en/api-docs Adheres to official API guidelines
 *
 */
final class PHPClient
{
    protected $access_token = null;

    public $auth;
    public $user;
    public $projects;
    public $bugs;
    public $attachments;
    public $platform;

    public function __construct() {
        $this->auth        = new OAuth2Handler($this);
        $this->user        = new UserHandler($this);
        $this->projects    = new ProjectsHandler($this);
        $this->bugs        = new BugsHandler($this);
        $this->attachments = new AttachmentsHandler($this);
        $this->platform    = new PlatformHandler($this);
    }

    /**
     *
     * Function to retrieve curently attached token.
     *
     * @return string|bolean Returns string of attached token or false if no token is attached.
     *
     */
    public function getCurrentToken() {
        if ($this->access_token === null) {
            return false;
        }
        return $this->access_token;
    }

    /**
     *
     * Function to attach new token to SDK Client instance. Token changes are dynamic; all objects/entities originating
     * from an instance which has had its token updated will utilize the new token automatically.
     *
     */
    public function attachToken($access_token) {
        $this->access_token = $access_token;
    }
}
