


<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);



require 'app/init.php';
require 'app/view/static/header.php';

$_url = get('url');
$_url = array_filter(explode('/', $_url));


if (!isset($_url[0])) {
    $_url[0] = 'index';
}

if (!file_exists(controller . '/' . $_url[0] . '.php')) {
    $_url[0] = 'index';
}


require controller($_url[0]);

 

?>






