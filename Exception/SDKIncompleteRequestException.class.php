<?php

namespace LeanTesting\API\Client;

class SDKIncompleteRequestException extends SDKException
{
	private $base_message = 'Incomplete request data';

	public function __construct($message = null) {
		if (is_array($message)) {
			foreach ($message as $m) {
				$m = '`' . $m . '`';
			}
			$message = implode(', ', $message);
		}

		if ($message == null) {
			$message = $this->base_message;
		} else {
			$message = $this->base_message . ' - missing required ' . $message;
		}

		parent::__construct($message);
	}
}
