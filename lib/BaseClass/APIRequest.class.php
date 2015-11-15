<?php

namespace LeanTesting\API\Client;

class APIRequest
{
	protected $default_opts = [
		'base_uri'     => 'https://api.leantesting.com',
		'params'       => []
	];

	protected $origin;
	protected $endpoint;
	protected $method;
	protected $opts;

	protected $curl_handler = null;

	public function __construct($origin, $endpoint, $method, $opts = []) {
		if (!in_array($method, ['GET', 'POST', 'PUT', 'DELETE'])) {
			throw new SDKInvalidArgException('unsupported ' . $method . ' `$method`');
		}

		$this->updateOpts($opts);

		$this->origin   = $origin;
		$this->endpoint = $endpoint;
		$this->method   = $method;
	}

	public function updateOpts($opts = []) {
		if (array_key_exists('params', $opts) && !is_array($opts['params'])) {
			throw new SDKInvalidArgException('`$opts[\'params\']` must be an array');
		}

		$this->opts = array_merge($this->default_opts, $opts);
	}

	public function exec() {
		$this->curl_handler = curl_init();

		$call_url = $this->opts['base_uri'] . $this->endpoint;

		curl_setopt($this->curl_handler, CURLOPT_CUSTOMREQUEST, $this->method);

		// Method-oriented parsing
		switch ($this->method) {
			case 'GET':
				$expected_http_status = 200;
				$call_url .= '?' . http_build_query($this->opts['params']);
				break;
			case 'POST':
				$expected_http_status = 200;
				//TODO;
				break;
			case 'PUT':
				$expected_http_status = 200;
				//TODO;
				break;
			case 'DELETE':
				$expected_http_status = 204;
				break;
		}

		// Extra opts parse
		// foreach ($this->opts as $opk => $opv) {
		// 	switch ($opk) {
		// 		default:
		// 	}
		// }

		if (is_string($this->origin->getCurrentToken())) {
			curl_setopt(
				$this->curl_handler,
				CURLOPT_HTTPHEADER,
				['Authorization: Bearer ' . $this->origin->getCurrentToken()]
			);
		}

		curl_setopt($this->curl_handler, CURLOPT_URL, $call_url);

		curl_setopt($this->curl_handler, CURLOPT_HEADER, false);
		curl_setopt($this->curl_handler, CURLOPT_RETURNTRANSFER, true);

		$curl_data = curl_exec($this->curl_handler);
		$curl_status = (int)curl_getinfo($this->curl_handler, CURLINFO_HTTP_CODE);

		if ($curl_status !== $expected_http_status) {
			throw new SDKRemoteAPIErrorException($curl_data);
		}

		curl_close($this->curl_handler);
		$this->curl_handler = null;

		//TODO verify response validity / authenticity / format, exception otherwise
		return json_decode($curl_data, true);
	}
}
