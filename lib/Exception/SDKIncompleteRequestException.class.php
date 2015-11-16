<?php

namespace LeanTesting\API\Client;

class SDKIncompleteRequestException extends SDKException
{
	private $base_message = 'Incomplete request data';

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
			$message = $this->base_message . ' - missing required ' . $message;
		}

		parent::__construct($message, $code, $previous);
	}
}
