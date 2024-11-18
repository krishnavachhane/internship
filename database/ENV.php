<?php
switch($_SERVER['SERVER_NAME']){
    case'localhost':
        ini_set('display_errors',1);
        ini_set('display_startup_error',1);
        error_reporting(E_ALL);
        require'dbkeys.php';
        break;
        case 'example.com':
            error_reporting(0);
            require'/home/ubuntu/dbKeys.php';
            break;
            default:
            exit;
            break; 
}