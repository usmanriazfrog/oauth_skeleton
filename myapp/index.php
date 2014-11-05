<?php
require_once __DIR__ . '/../lib/oauth/vendor/autoload.php';

use ohmy\Auth1;

require_once 'config.php';

if (!isset($_COOKIE['demo_oauth'])) {
    header('Location: config_oauth.php');
} else {
    $cookie = json_decode($_COOKIE['demo_oauth']);
    list($access_token, $access_secret) = $cookie;
}

/**
 * Your awesome app here!
 */
