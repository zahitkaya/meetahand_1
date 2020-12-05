<?php 
$sql = $db->prepare("select * from ders where ders_id=? ");
    $sql->execute([2]);
$a = $sql->fetch(PDO::FETCH_ASSOC);
echo print_r($a);


?>