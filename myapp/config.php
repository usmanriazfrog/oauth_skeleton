<?php
/**
 * Set config constants here
 */
define('CONSUMER_KEY', 'your consumer key');
define('CONSUMER_SECRET', 'your consumer secret');

define('FROGOS_URL', 'https://fdp-demo.frogos.net');
define('CALLBACK_URL', '{your domain}/myapp/config_oauth.php');

/**
 * Example API request using ohmyAuth
 *
 * $frog_request = Auth1::init(3)
 *              ->set('oauth_consumer_key', CONSUMER_KEY)
 *              ->set('oauth_consumer_secret', CONSUMER_SECRET)
 *              ->access($access_token, $access_secret)
 *              ->GET(FROGOS_URL . '/api/fdp/2/user/get', array(), array('X-AuthType' => 'oauth_1_0_a'))
 *              ->finally(function($response) use(&$users) {
 *                  $data = $response->json();
 *                  $users = $data['response'];
 *              });
 */
