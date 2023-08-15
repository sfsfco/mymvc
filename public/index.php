<?php
require_once '../config/config.php';
require_once '../Core/Router.php';

$router = new Router();
$router->dispatch();
