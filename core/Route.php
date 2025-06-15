<?php

namespace Core;

class Route
{
    public static function start()
    {
        $url = $_GET['uri'] === ''  ? 'auth/login' : $_GET['uri'];

        $segments = explode('/', trim($url, '/'));

        $controllerName = ucfirst($segments[0] ?? 'Auth') . 'Controller';
        $methodName = $segments[1] ?? 'index';
        $params = array_slice($segments, 2);

        $controllerFile = "./app/Controllers/{$controllerName}.php";

        if (file_exists($controllerFile)) {
            require_once $controllerFile;
            $controllerClass = "\\App\\Controllers\\$controllerName";

            if (class_exists($controllerClass)) {
                $controller = new $controllerClass();

                if (method_exists($controller, $methodName)) {
                    call_user_func_array([$controller, $methodName], $params);
                    return;
                }
            }
        }

        http_response_code(404);
        echo "404 Not Found";
    }
}
