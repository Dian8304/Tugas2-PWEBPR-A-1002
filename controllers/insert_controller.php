<?php

include_once 'models/user.php';
include_once 'function/main.php';
include_once 'config/static.php';

class InsertController {
    static function index() {
        view('insert');
    }
}