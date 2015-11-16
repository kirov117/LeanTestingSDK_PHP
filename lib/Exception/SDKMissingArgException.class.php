<?php

namespace LeanTesting\API\Client;

class SDKMissingArgException extends SDKException
{
	private $base_message = 'Missing argument';

	public function __construct($message = null, $code = 0, Exception $previous = null) {
		if ($message == null) {
			$message = $this->base_message;
		} else {
			$message = $this->base_message . ' `' . $message . '`';
		}

		parent::__construct($message, $code, $previous);
	}
}
