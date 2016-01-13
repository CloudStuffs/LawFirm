<?php

// define routes

$routes = array(
    array(
        "pattern" => "home",
        "controller" => "home",
        "action" => "index"
    ),
    array(
        "pattern" => "work",
        "controller" => "home",
        "action" => "work"
    ),
    array(
        "pattern" => "awards",
        "controller" => "home",
        "action" => "awards"
    ),
    array(
        "pattern" => "memberships",
        "controller" => "home",
        "action" => "memberships"
    ),
    array(
        "pattern" => "contact",
        "controller" => "home",
        "action" => "contact"
    )
);

// add defined routes
foreach ($routes as $route) {
    $router->addRoute(new Framework\Router\Route\Simple($route));
}

// unset globals
unset($routes);
