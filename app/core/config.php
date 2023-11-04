<?php

if($_SERVER['SERVER_NAME'] == 'php-mvc.local'){
    
    /* DB Config */
    define('DBNAME', 'my_db');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('DBCHARSET', 'utf8');
    define('DBDRIVER', 'mysql');

    define('ROOT', 'http://php-mvc.local/public/');
} else {
    /* DB Config */
    define('DBNAME', 'my_db');
    define('DBHOST', 'localhost');
    define('DBUSER', 'root');
    define('DBPASS', '');
    define('DBCHARSET', 'utf8');
    define('DBDRIVER', 'mysql');

    define('ROOT', 'http://php-mvc.local/public/');
}

define('APP_NAME', 'PHP MVC');
define('APP_DESC', 'PHP MVC Framework');

define('DEBUG', true);

