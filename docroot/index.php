<?php


// index.php
require_once 'vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = Request::createFromGlobals();

$uri = $request->getPathInfo();
if ('/' === $uri) {

  $response = list_action();

} elseif ('/show' === $uri && $request->query->has('id')) {

  $response = show_action($request->query->get('id'));

} else {

  $html = '<html><body><h1>Page Not Found</h1></body></html>';
  $response = new Response($html, Response::HTTP_NOT_FOUND);

}

// echo the headers and send the response
$response->send();