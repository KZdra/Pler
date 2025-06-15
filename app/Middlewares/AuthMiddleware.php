<?php
namespace App\Middlewares;

use Core\Auth;
use Core\Flash;
class AuthMiddleware {
    public static function handle() {
        if (!Auth::check()) {
            Flash::set('error','Silahkan Login Dahulu');
            header("Location: " . BASE_URL . "auth/login");
            exit;
        }
    }
}
