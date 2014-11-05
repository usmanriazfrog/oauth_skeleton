<?php
require_once __DIR__ . '/../lib/oauth/vendor/autoload.php';

use ohmy\Auth1;

require_once('config.php');

# initialize 3-legged oauth
$frog = Auth1::legs(3)
               ->set('key', CONSUMER_KEY)
               ->set('secret', CONSUMER_SECRET)
               ->set('callback', CALLBACK_URL)

               # oauth
               ->request(FROGOS_URL . '/api/2/oauth1.php/request-token')
               ->authorize(FROGOS_URL . '/app/login')
               ->access(FROGOS_URL . '/api/2/oauth1.php/access-token')
               ->finally(function($data) use(&$token, &$secret) {
                   $token = $data['oauth_token'];
                   $secret = $data['oauth_token_secret'];

                   if (!setcookie('demo_oauth', json_encode(array($token, $secret)), time() + 86400, '/')) {
                       die('Cookie not set');
                   }
               });

header('Location: index.php');
