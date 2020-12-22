<!DOCTYPE html>
<html>
<?php
session_start();
ob_start();
?>

<head>
    <title>başlık</title>

    <link rel="stylesheet" href=" <?= asset_url('styles/style.css'); ?>"> <!-- CSS Ekleme -->
    <a id="logom" href="<?php echo url  ?>"><img src="<?php echo asset_url('images/Meetahandlogosign1.jpg'); ?>" alt="logo" height="155px" align="left" /></a>


</head>


<body>

    <?php require 'menu.php' ?>


    <img src="<?php echo asset_url('images/education.jpg') ?>" id="homeimg" width="100%" height="%20" align="center" style='<?php if ($_SERVER['REQUEST_URI'] <> "/meetahand/") echo "display:none" ?>' />
    <div class="anasayfa" id="anasayfa" style='<?php if ($_SERVER['REQUEST_URI'] <> "/meetahand/") echo "display:none" ?>'>

        <?php require 'homepage.php' ?>

    </div> <!-- anasayfa divi sonu -->




    <!-- shift+alt+f -->