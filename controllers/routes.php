<?php

include_once 'config/static.php';
include_once 'controllers/main.php';
include_once 'function/main.php';

Router::url('login', 'get', 'AuthController::login');
Router::url('login', 'post', 'AuthController::sessionLogin');
Router::url('signin', 'get', 'AuthController::signin');
Router::url('signin', 'post', 'AuthController::newSignin');
Router::url('dashboard','get','DashboardController::index');
Router::url('insert','post','ContactController::createContact');
Router::url('update','post','ContactController::updateContact');
Router::url('delete','post','ContactController::deleteContact');


Router::url('/', 'get', function () {
    view('login');
});