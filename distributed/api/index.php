<?php

/**
 * @return array|false
 */
function getClearedHeaders()
{
    $headers = apache_request_headers();

    if (isset($headers['User-Agent'])) {
        unset($headers['User-Agent']);
    }
    if (isset($headers['Host'])) {
        unset($headers['Host']);
    }
    if (isset($headers['Content-Type'])) {
        unset($headers['Content-Type']);
    }
    if (isset($headers['Content-Length'])) {
        unset($headers['Content-Length']);
    }
    if (isset($headers['Accept'])) {
        unset($headers['Accept']);
    }
    if (isset($headers['Accept-Language'])) {
        unset($headers['Accept-Language']);
    }
    if (isset($headers['Accept-Encoding'])) {
        unset($headers['Accept-Encoding']);
    }
    if (isset($headers['Referer'])) {
        unset($headers['Referer']);
    }
    if (isset($headers['Connection'])) {
        unset($headers['Connection']);
    }
    if (isset($headers['Pragma'])) {
        unset($headers['Pragma']);
    }
    if (isset($headers['Cache-Control'])) {
        unset($headers['Cache-Control']);
    }

    return $headers;
}

$response = json_encode(
    [
        'host' => $_SERVER['HTTP_HOST'],
        'get' => $_GET,
        'post' => $_POST,
        'non_simple_request_headers' => getClearedHeaders()
    ],
    JSON_PRETTY_PRINT
);

error_log($response);

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    header('Access-Control-Allow-Methods: GET,POST,PUT');
    header('Access-Control-Allow-Origin: http://demo-distributed:8080');
    header('Access-Control-Allow-Headers: x-app,access-token');
//    header('Access-Control-Allow-Headers: x-app,access-token,access-control-allow-origin');
} else {

    header('Content-Type: application/json; charset=utf-8');
    header('Access-Control-Allow-Origin: http://demo-distributed:8080');

//    header('Access-Control-Expose-Headers: x-claudio,Access-Control-Allow-Origin');
    header('x-claudio: patatas');

    echo $response;
}
