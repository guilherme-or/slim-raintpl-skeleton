<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';
require '../app/config/config.php';

use app\layout\Page;

$app = AppFactory::create();

$app->get(BASE_PATH . '/', function (Request $request, Response $response, array $args) {
    $page = new Page();
    $includes = ['script' => 'index', 'style' => ''];
    $page->setTpl('index', $includes);
    return $response;
});

$app->run();
?>