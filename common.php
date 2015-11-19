<?php

namespace LeanTesting\API\Client;

define('REQUIRED', 1);
define('OPTIONAL', 0);

define('MAX_DEPTH_LEVEL', 2);

/**
 *
 * Recursively load (require) files in a directory
 *
 * @param string  $dir   name of main directory to recurse into
 * @param int     $depth (optional) current depth
 *
 * @link https://gist.github.com/pwenzel/3438784
 *
 */
function recurseRequire($dir, $depth = 0) {
    if ($depth > MAX_DEPTH_LEVEL) {
        return;
    }

    $scan = glob($dir . DIRECTORY_SEPARATOR . '*');
    foreach ($scan as $path) {
        if (preg_match('/\.php$/', $path)) {
            require $path;
        } elseif (is_dir($path)) {
            recurseRequire($path, $depth + 1);
        }
    }
}
