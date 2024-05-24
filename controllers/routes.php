<?php

include_once 'config/static.php';
include_once 'controllers/main.php';
include_once 'function/main.php';

Router::url('login', 'get', 'AuthController::login');
Router::url('login', 'post', 'AuthController::sessionLogin');
Router::url('signin', 'get', 'AuthController::signin');
Router::url('dashboard','get','DashboardController::index');
Router::url('insert','get','InsertController::index');
Router::url('insert','post','InsertController::index');


Router::url('/', 'get', function () {
    view('login');
});