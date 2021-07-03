<?php
use Psr\Http\Message\ResponseInterface as SlimResponse;
use Psr\Http\Message\ServerRequestInterface as SlimRequest;
use Slim\Factory\AppFactory;
use GuzzleHttp\Psr7\Request as GuzzleRequest;
use GuzzleHttp\Psr7\Response as GuzzleResponse;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

$app->post('/bla/bla/bla', function (SlimRequest $slimRequest, SlimResponse $slimResponse) {
    $slimRequest = $slimRequest->withUri($slimRequest->getUri()->withHost('https://swapi.dev/api/starships/9/')->getHost());
    $guzzleResponse=$this->httpClient->send($slimRequest);
});






/*$app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
    $name = $args['name'];
    $response->getBody()->write("Hello, $name");
    return $response;
});*/

$app->run();
