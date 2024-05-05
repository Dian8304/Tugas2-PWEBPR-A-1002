<?php
// var_dump($_SERVER);

$url = $_SERVER['REQUEST_URI'];

$dirName = 'Tugas2-PWEBPR-A-1002';
$url = implode("/",
            array_filter(
                explode("/",
                    str_replace($dirName, "",
                        parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
                    )
                ), 'strlen'
            )
        );

switch ($url) {
    case 'login':
        include 'view/login.php';
        break;
    case 'signin':
        include 'view/signin.php';
        break;
    case 'insert';
        include 'view/insert.php';
        break;
    default:
        include 'view/dashboard.php';
}
// var_dump($url);