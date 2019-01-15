<?php
$path = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '/';

switch($path) {
    case '/':
        $page_title = "Home Page";
        break;
    case '/login':
        $page_title = "Login Page";
}