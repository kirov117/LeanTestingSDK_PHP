<?php

namespace LeanTesting\API\Client;

require 'common.php';

require 'vendor/autoload.php';       // Composer-ready autoloading for future package needs

recurseRequire(__DIR__ . '/Exception'); // Load Exception Classes
recurseRequire(__DIR__ . '/BaseClass'); // Load Base Classes
recurseRequire(__DIR__ . '/Entity');    // Load Entity Classes
recurseRequire(__DIR__ . '/Handler');   // Load Handler Classes
