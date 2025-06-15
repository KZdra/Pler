<?php

require_once './config.php';
require_once './core/Route.php';

use Core\Route;

// Start session
session_start();

// Jalankan router
Route::start();
