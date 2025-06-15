<?php
namespace Core;

class Middleware {
    public static function apply($middlewares = []) {
        foreach ($middlewares as $middleware) {
            $middlewareClass = "\\App\\Middlewares\\{$middleware}";
            if (class_exists($middlewareClass)) {
                $middlewareClass::handle();
            }
        }
    }
}
