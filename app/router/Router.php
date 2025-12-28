<?php

class Router {
    protected $routes = [];

    public function addController($url, $controller, $method) {
        $this->routes[$url] = [
            'type' => 'controller', 
            'controller' => $controller,
            'method' => $method
        ];
    }

    public function addView($url, $viewName, $pageTitle) {
        $this->routes[$url] = [
            'type' => 'view',
            'view' => $viewName,
            'title' => $pageTitle
        ];
    }

    public function route() {
        $req_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $path = trim($req_uri, '/');
        $page = empty($path) ? 'home' : $path;

        if (array_key_exists($page, $this->routes)) {
            $route = $this->routes[$page];

            
            if (isset($route['type']) && $route['type'] === 'view') {
                $title = $route['title'];
                $content_file = $route['view'];
                require_once __DIR__ . '/../../views/templates/layout.php';
                return;
            }

            
            if (isset($route['type']) && $route['type'] === 'controller') {
                $controllerName = $route['controller'];
                $methodName = $route['method'];
                $controllerPath = __DIR__ . '/../Controllers/' . $controllerName . '.php';

                if (file_exists($controllerPath)) {
                    require_once $controllerPath;
                    $controller = new $controllerName();
                    
                    if (method_exists($controller, $methodName)) {
                        $controller->$methodName();
                    } else {
                        die("Error: Method $methodName not found");
                    }
                } else {
                    die("Error: Controller $controllerName not found");
                }
            }

        } else {
            // 404
            $title = "404 Not Found";
            require_once __DIR__ . '/../../views/pages/404.php';
        }
    }
}