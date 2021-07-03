<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

require_once('../app/api/starships.php');

/*
$app->get('/hello/{name}', function ($request, $response, array $args) {
    $name = $args['name'];
    $response->getBody()->write("Hello there, $name");
    return $response;
});*/

$app->get('/', function ($request, $response, array $args) {
    $response->getBody()->write("Hello there");
    return $response;
});

$app->get('/hello/jane', function ($request, $response, array $args) {
    $response->getBody()->write("Hello Jane");
    return $response;
});

try {
    $app->run();     
} catch (Exception $e) {    
  // We display a error message
  die( json_encode(array("status" => "failed", "message" => "This action is not allowed"))); 
}

