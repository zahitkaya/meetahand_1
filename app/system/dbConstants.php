<?php

$sql = $db->prepare("select * from bolum where bolum_id=? ");
$sql1 = $db->prepare("select * from ders where ders_id=? ");
$sql2 = $db->prepare("select * from lecture where lecture_id=? ");


$bolum_ad = array();
$ders_ad = array();
$ders_kod = array();
$lecture_ad = array();
$lecture_icerik = array();
$bolumler = array();

for ($i = 0; $i < 100; $i++) {
  $sql->execute([$i]);
  $bolumler = $sql->fetch(PDO::FETCH_ASSOC);

  if (!empty($bolumler['bolum_id'])) {

    $bolum_ad[$i] = $bolumler['bolum_ad'];
  }
}

for ($i = 0; $i < 100; $i++) {
  $sql1->execute([$i]);
  $ders = $sql1->fetch(PDO::FETCH_ASSOC);

  if (!empty($ders['ders_id'])) {

    $ders_ad[$i] = $ders['ders_ad'];
    $ders_kod[$i] = $ders['ders_kod'];
  }
}
for ($i = 0; $i < 100; $i++) {
  $sql2->execute([$i]);
  $lecture = $sql2->fetch(PDO::FETCH_ASSOC);

  if (!empty($lecture['lecture_id'])) {
    $lecture_ad[$i] = $lecture['lecture_ad'];
    $lecture_icerik[$i] = $lecture['lecture_icerik'];
  }
}
