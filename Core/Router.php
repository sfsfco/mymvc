<?php
class Router {
    public function dispatch() {
        $route = $_GET['route'] ?? 'Home/index';
        $parts = explode('/', $route);

        $controllerName = ucfirst($parts[0]) . 'Controller';
        $actionName = !empty($parts[1]) ? $parts[1] : 'index';

        $controllerClassName = "\\App\\Controllers\\$controllerName";

        // Create an instance of the controller
        $controller = new $controllerClassName();

        // Call the action method with parentheses
        if (method_exists($controller, $actionName)) {
            $controller->$actionName();
        } else {
            // Handle a case where the action doesn't exist
            echo "Action not found";
        }
    }
}
