<?php

include_once 'models/user.php';
include_once 'function/main.php';
include_once 'config/static.php';

class AuthController {
    static function login() {
        view('login');
    }
    static function signin() {
        view('signin');
    }
    static function sessionLogin() {
        $post = array_map('htmlspecialchars', $_POST);

        $user = User::login([
            'nama_user' => $post['nama_user'], 
            'pass' => $post['pass']
        ]);
        if ($user) {
            unset($user['password']);
            $_SESSION['user'] = $user;
            header('Location: '.BASEURL.'dashboard');
        }
        else {
            header('Location: '.BASEURL.'dashboard');
        }
    }
    static function newRegister() {
        $post = array_map('htmlspecialchars', $_POST);

        $user = User::register([
            'nama_user' => $post['nama_user'], 
            'pass' => $post['pass']
        ]);

        if ($user) {
            header('Location: '.BASEURL.'login');
        }
        else {
            header('Location: '.BASEURL.'register?failed=true');
        }
    }
}