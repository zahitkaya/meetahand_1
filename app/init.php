<?php

//helperları otomatik yükliycez ve class dosyalarını oluşturcaz.
// veri tabanı bağlantısını yapacaz


spl_autoload_register(function ($class) {
    $file = realpath('.') . '/app/classes/class.' . strtolower($class) . '.php';
    if (file_exists($file)) {
        require $file;
    }
});


$conn = mysqli_connect('localhost', 'root', '');
$db = mysqli_select_db($conn, 'yeni');


//$query = "SELECT bolum_ad FROM bolum WHERE bolum_id=1";
//$result = mysqli_query($conn,$query);
//$count = mysqli_num_rows($result);
//print_r($result);



try {
   $db = new PDO('mysql:host=localhost;dbname=yeni', 'root', ''); //Veritabanı şifresini burda yazıyoruz. 
} catch (PDOException $e) {
    echo $e->getMessage();
}



require 'system/config.php';
require 'system/dbConstants.php';

helper::Load();
?>

