<?php

namespace App\Controllers;

use Core\Auth;
use Core\Middleware;

class DashboardController extends Controller
{
    public function __construct()
    {
        Middleware::apply(['AuthMiddleware']);
    }
    public function index()
    {
        if (!Auth::check()) {
            $this->redirect('auth/login');
        }

        $user = Auth::user();
        $this->view('dashboard', ['user' => $user]);
    }
}
