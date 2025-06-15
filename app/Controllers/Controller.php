<?php

namespace App\Controllers;

class Controller
{
    // How to use Middleware
    //     public function __construct() {
    //     Middleware::apply(['Your Middleware Name']);
    // }

    public function view($view, $data = [])
    {
        extract($data);
        require "./app/Views/{$view}.php";
    }

    public function redirect($url)
    {
        header("Location: " . BASE_URL . $url);
        exit;
    }

    public function responseJson($data = [], $message = '', $status = 'success', $code = 200)
    {
        http_response_code($code);
        header('Content-Type: application/json');
        echo json_encode([
            'status' => $status,
            'message' => $message,
            'data' => $data,
            'code' => $code
        ]);
        exit;
    }
}
