<?php

namespace LeanTesting\API\Client;

class SDKException extends \Exception
{
	public function __construct($message = null, $code = 0, Exception $previous = null) {
		if ($message == null) {
			$message = 'Unknown SDK Error';
		} else {
			$message = 'SDK Error: ' . $message;
		}

		parent::__construct($message, $code, $previous);
	}
}
