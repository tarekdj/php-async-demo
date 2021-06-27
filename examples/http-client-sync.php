<?php
namespace Trowski\ReactFiber\Examples;

use Symfony\Component\HttpClient\NativeHttpClient;

require \dirname(__DIR__) . '/vendor/autoload.php';

define('METHOD', 'GET');
$client = new NativeHttpClient();

foreach(['https://reactphp.org', 'https://google.com', 'https://www.php.net'] as $url) {

    $response = $client->request(METHOD, $url);

    var_dump(\sprintf(
        '%s %s; Status: %d;',
        METHOD,
        $url,
        $response->getStatusCode()
    ));
}