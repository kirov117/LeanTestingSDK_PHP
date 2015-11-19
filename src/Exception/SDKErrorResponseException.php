<?php

namespace LeanTesting\API\Client;

class SDKErrorResponseException extends SDKException
{
    public function __construct($message = null) {
        if ($message == null) {
            $message = 'Unknown remote error';
        } else {
            $message = 'Got error response: ' . $message;
        }

        parent::__construct($message);
    }
}
