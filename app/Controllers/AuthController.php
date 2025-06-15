<?php

namespace App\Controllers;

use App\Models\User;
use Core\Auth;
use Core\Flash;

class AuthController extends Controller
{
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $userModel = new User();
            $user = $userModel->findByUsername($username);

            if ($user && password_verify($password, $user['password'])) {
                Auth::login($user);
                $this->redirect('dashboard');
            } else {
                Flash::set('error', 'Username atau password salah');
                $this->view('login');
            }
        } else {
            $this->view('login');
        }
    }

    public function logout()
    {
        Auth::logout();
        $this->redirect('auth/login');
    }

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $userModel = new User();
            $user = $userModel->insert($_POST);
            if ($user) {
                Flash::set('success', 'Berhasil REgistrasi!');
                $this->redirect('auth/login');
                // for api
                // $this->responseJson([], 'Registered');
            } else {
                Flash::set('error', 'Gagal REgistrasi!');
                $this->view('register');
                // for api
                // $this->responseJson([$user], 'error', 0, 500);
            }
        } else {
            $this->view('register');
        }
    }
    public function dashboard()
    {
        if (!Auth::check()) {
            $this->redirect('auth/login');
        }

        $user = Auth::user();
        echo "Selamat datang, {$user['username']}!";
    }
}
