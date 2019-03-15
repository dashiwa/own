<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

$routes = new RouteCollection();

$routes->add('hello', new Route('/hello/{name}', [
  'name' => 'World',
  '_controller' => function ($request) {
    // $foo will be available in the template
    $request->attributes->set('foo', 'bar');

    $response = render_template($request);

    // change some header
    $response->headers->set('Content-Type', 'text/plain');

    return $response;
  }
]));

return $routes;