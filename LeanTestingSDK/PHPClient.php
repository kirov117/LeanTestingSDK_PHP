<?php

namespace LeanTesting\API\Client;

require 'common.php';                   // General function declarations and references

require 'vendor/autoload.php';          // Composer-ready autoloading for future package needs

recurseRequire(__DIR__ . '/Exception'); // Load Exception Classes
recurseRequire(__DIR__ . '/BaseClass'); // Load Base Classes
recurseRequire(__DIR__ . '/Entity');    // Load Entity Classes
recurseRequire(__DIR__ . '/Handler');   // Load Handler Classes

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

    public $wat;

    public function __construct() {
        $this->auth        =  new OAuth2Handler($this);
        $this->user        =  new UserHandler($this);
        $this->projects    =  new ProjectsHandler($this);
        $this->bugs        =  new BugsHandler($this);
        $this->attachments =  new AttachmentsHandler($this);
        $this->platform    =  new PlatformHandler($this);
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
     * @param string $access_token the string of the token to be attached
     *
     */
    public function attachToken($access_token) {
        $this->access_token = $access_token;
    }
}
