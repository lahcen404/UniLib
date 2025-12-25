<?php

class Router {
    protected $routes = [];

    public function add($url, $viewPath, $title) {
        $this->routes[$url] = [
            'view' => $viewPath,
            'title' => $title
        ];
    }


public function route() {
    $req_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $path = trim($req_uri, '/');
    $page = empty($path) ? 'home' : $path;

    $baseDir = dirname(__DIR__, 2); 

    if (array_key_exists($page, $this->routes)) {
        $viewFile = $this->routes[$page]['view'];
        $title = $this->routes[$page]['title'];
        
        $content_file = $baseDir . '/views/pages/' . $viewFile . '.php';
    } else {
        $title = '404 - Not Found';
        $content_file = $baseDir . '/views/pages/404.php';
    }

    if (file_exists($content_file)) {
        require_once $baseDir . '/views/templates/layout.php';
    } else {
        die(" Error: The file $content_file does not exist.");
    }
}
}
