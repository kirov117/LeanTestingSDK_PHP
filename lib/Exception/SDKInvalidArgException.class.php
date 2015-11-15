<?php

namespace LeanTesting\API\Client;

class SDKInvalidArgException extends SDKException
{
	public function __construct($message = null, $code = 0, Exception $previous = null) {
		if ($message == null) {
			$message = 'Invalid argument';
		} else {
			$message = 'Invalid argument: ' . $message;
		}

		parent::__construct($message, $code, $previous);
	}
}
