<?php

namespace Core;

class Flash
{
    public static function set($key, $message)
    {
        if (!isset($_SESSION['flash']) || !is_array($_SESSION['flash'])) {
            $_SESSION['flash'] = [];
        }
        $_SESSION['flash'][$key] = $message;
    }

    public static function get($key)
    {
        if (isset($_SESSION['flash'][$key])) {
            $msg = $_SESSION['flash'][$key];
            unset($_SESSION['flash'][$key]);
            return $msg;
        }
        return null;
    }

    public static function has($key)
    {
        return isset($_SESSION['flash'][$key]);
    }
}
