<?php
require_once 'vendor/autoload.php';

$client = new MongoDB\Client('mongodb://test-container-mongo:27017');
$collection = $client->test->coll;

$uri = $_SERVER['REQUEST_URI'];

if ($uri === '/') {
    echo "php: Hello World!";
} elseif ($uri === '/test-get') {
    $result = $collection->findOne(['name' => 'Max']);
    echo json_encode($result);
} elseif ($uri === '/test-get-all') {
    $results = $collection->find();
    echo json_encode($results->toArray());
} else {
    http_response_code(404);
    echo "Not Found";
}
?>