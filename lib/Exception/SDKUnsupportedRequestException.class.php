<?php

namespace LeanTesting\API\Client;

class SDKUnsupportedRequestException extends SDKException
{
	private $base_message = 'Unsupported request data';

	public function __construct($message = null, $code = 0, Exception $previous = null) {
		if (is_array($message)) {
			$arr = $message;
			foreach ($arr as $a) {
				$a = '`' . $a . '`';
			}
			$message = implode(', ', $a);
		}

		if ($message == null) {
			$message = $this->base_message;
		} else {
			$message = $this->base_message . ' - invalid ' . $message;
		}

		parent::__construct($message, $code, $previous);
	}
}
