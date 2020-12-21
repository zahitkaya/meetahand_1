<div class="sidenav">
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>
<style>
  .sidenav {

 width: 160px; /* Kenar çubuğunun genişliğini ayarlama */
 position: fixed; /* Sabit Kenar Çubuğu (kaydırmada, yerinde kal) */
 z-index: 1; /* Üst Katmanda kalmak */
 top: 15; /* En üstten menü oluştur */
 left: 0;/* Soldan menü oluştur */
 background-color: #111; /* Menü siyah renk olsun */
 overflow-x: hidden; /* Yatay kaydırmayı devre dışı bırak */
 padding-top: 20px;
}
</style>
<?php 

echo url(0);
foreach($bolum_ad as $key => $value)
{
  echo $value."<br>";
}
foreach($ders_ad as $key => $value)
{
  echo $value."<br>";
}
foreach($ders_kod as $key => $value)
{
  echo $value."<br>";
}
foreach($lecture_ad as $key => $value)
{
  echo $value."<br>";
}
foreach($lecture_icerik as $key => $value)
{
  echo $value."<br>";
}
?>


