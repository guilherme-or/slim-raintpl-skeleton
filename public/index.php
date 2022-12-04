<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';
require '../app/config.php';

use app\helpers\Page;

$app = AppFactory::create();

$app->get(PATH . '/', function (Request $request, Response $response, array $args) {
    $page = new Page();
    $includes = ['script' => 'index', 'stylesheet' => 'index'];
    $page->setTpl('index', $includes);
    return $response;
});

$app->run();
?>