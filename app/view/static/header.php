<!DOCTYPE html>
<html>
<?php
session_start();
ob_start();
?>

<head>
    <title>başlık</title>

    <link rel="stylesheet" href=" <?= asset_url('styles/style.css'); ?>"> <!-- CSS Ekleme -->
</head>


<body>

    <a id="logom" href="<?php echo url  ?>"><img src="<?php echo asset_url('images/Meetahandlogosign1.jpg'); ?>" alt="logo" height="155px" align="left" /></a>
    <!-- Arka plan resmi -->
    <?php $target_link = url; ?>




    <ul class="menu">

        <li>
            <a href="logout" style="display: <?php if (!isset($_SESSION['login'])) {
                                                    echo  'none;';
                                                } ?>"> Log out </a>
        </li>
        <li>
            <a href="signin" style="display: <?php if ($_SESSION['login']) {
                                                    echo  'none;';
                                                } ?>"> Sign In</a>
        </li>
        <li>
            <a href="contact"> Contact Us </a>
        </li>
        <li>
            <a href="about"> About Us </a>
        </li>
        <li>
            <a href="#"> Store </a>
            <ul>
                <li>
                    <a href="#"> Mechatronics Engineering </a>
                </li>
                <li>
                    <a href="#"> Electrical-Electronics Engineering </a>
                </li>
                <li>
                    <a href="#"> Computer Engineering </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#"> Appointment</a>
        </li>
        <li>
            <a href="<?php echo url ?>/konu"> Lecture Notes <i class="arrow down"></i></a>
            <ul>
                <li>
                    <a href="#"> Mechatronics Engineering </a>
                </li>
                <li>
                    <a href="#"> Electrical-Electronics Engineering </a>
                </li>
                <li>
                    <a href="#"> Computer Engineering </a>
                </li>

                <?php foreach ($bolum_ad as $key => $value) {
                    echo '<li><a href=' . url . '/konu/' . $key . '>';
                    echo $value;
                }
                echo '</a></li>'; ?>
            </ul>
        </li>

        <li>
            <a href="<?php echo url ?>"> Home</a>
        </li>
    </ul>
    <img src="<?php echo asset_url('images/education.jpg') ?>" id="homeimg" width="100%" height="%20" align="center" style='<?php if ($_SERVER['REQUEST_URI'] <> "/meetahand/") echo "display:none" ?>' />
    <div class="anasayfa" id="anasayfa" style='<?php if ($_SERVER['REQUEST_URI'] <> "/meetahand/") echo "display:none" ?>'>

    <?php require 'homepage.php' ?>

    </div>



    <!-- anasayfa divi sonu -->
    <!-- shift+alt+f -->