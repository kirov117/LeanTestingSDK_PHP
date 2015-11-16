<?php

namespace LeanTesting\API\Client;

class SDKErrorResponseException extends SDKException
{
	public function __construct($message = null, $code = 0, Exception $previous = null) {
		if ($message == null) {
			$message = 'Unknown remote error';
		} else {
			$message = 'Got error response: ' . $message;
		}

		parent::__construct($message, $code, $previous);
	}
}
