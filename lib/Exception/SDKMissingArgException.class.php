<?php

namespace LeanTesting\API\Client;

class SDKMissingArgException extends SDKException
{
	public function __construct($message = null, $code = 0, Exception $previous = null) {
		if ($message == null) {
			$message = 'Missing argument';
		} else {
			$message = 'Missing argument `' . $message . '`';
		}

		parent::__construct($message, $code, $previous);
	}
}
