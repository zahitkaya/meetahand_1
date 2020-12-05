<?php

//helperları otomatik yükliycez ve class dosyalarını oluşturcaz.
// veri tabanı bağlantısını yapacaz


spl_autoload_register(function ($class) {
    $file = realpath('.') . '/app/classes/class.' . strtolower($class) . '.php';
    if (file_exists($file)) {
        require $file;
    }
});

try {
   $db = new PDO('mysql:host=localhost;dbname=yeni', 'root', ''); //Veritabanı şifresini burda yazıyoruz. 
} catch (PDOException $e) {
    echo $e->getMessage();
}
require 'system/config.php';
require 'system/dbConstants.php';


helper::Load();
