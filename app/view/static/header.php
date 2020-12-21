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
            <a href="#"> Contact Us </a>
        </li>
        <li>
            <a href="#"> About Us </a>
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
    <div class="anasayfa" id="anasayfa" style='<?php if ($_SERVER['REQUEST_URI'] <> "/meetahand/") echo "display:none" ?>'>

        <img src="<?php echo asset_url('images/education.jpg') ?>" id="homeimg" width="100%" height="%20" align="center" />


        <script>
            document.getElementById('anasayfa').style.backgroundRepeat="no-repeat";
        </script>

 
        
    <center>
        <h1 class="containerTitle">MISSIONS</h1>

        <div class="container" id="container1">
            <div id="st-box">

                <img src="<?php echo asset_url('images/mis2.png') ?>" width="125px" height="125px" alt="" />

                <h1>Engineer</h1>

                <p>Raising Capable Engineers</p>

                <p>Reminders for Engineers</p>

                <p>Informing Interested People</p>
            </div>

            <div id="nd-box">
                <p>
                    <br>
                    <img src="<?php echo asset_url('images/mis12.png') ?>" width="150px" height="111px" alt="" />

                    <h1>Interaction</h1>

                    <p>Proved and Reliable Information</p>

                    <p>Ease of Usage</p>
                    <br>
                    <p></p>
                </p>
            </div>

            <div id="rd-box">
                <br>
                <img src="<?php echo asset_url('images/mis3.png') ?>" width="125px" height="115px" alt="" />
                <h1>Profession</h1>

                <p>Experience Exchange</p>

                <p>&nbsp Critical Advices From Qualified Professionals</p>
                <br>
            </div>
        </div>
    </center>

    <center>
        <h1 class="containerTitle">CONTENT</h1>

        <div class="container">
            <div id="st-box">
                <img src="<?php echo asset_url('images/lecno.png') ?>" width="125px" height="125px" alt="" />
                <br>
                <h1>Lectures</h1>

                <p>Comprehensive and Target-Oriented Notes</p>

                <p>Combined with Journal Contexts</p>
                <br>
            </div>

            <div id="nd-box">
                <p>
                    <img src="<?php echo asset_url('images/app.png') ?>" width="125px" height="125px" alt="" />
                    <br>
                    <h1>Appointments</h1>

                    <p>Rendezvous with Professionals</p>

                    <p>Non-conflict Schedules</p>
                    <br>
                </p>
            </div>

            <div id="rd-box">
                <img src="<?php echo asset_url('images/sho.png') ?>" width="135px" height="110px" alt="" />
                <br><br>
                <h1>Store</h1>

                <p>Access to Lecture Note Books</p>

                <p>Hour-based Lecture Packages</p>

                <p>Meet a Hand Brand Products</p>
            </div>
        </div>
    </center>

    <center>
        <h1 class="containerTitle">STAFF</h1>

        <div class="container">
            <div id="st-box">
                <img src="<?php echo asset_url('images/mw.png') ?>" width="135px" height="102px" alt="" />
                <h1>Computer Engineering</h1>

                <p>Aslı Keklik</p>

                <p>Mehmet Zahit Kaya</p>
                <br>
            </div>

            <div id="nd-box">
                <img src="<?php echo asset_url('images/mw.png') ?>" width="135px" height="102px" alt="" />
                <h1>Electronics Engineering</h1>

                <p>Hatice Kübra Tahaoğlu</p>

                <p>Tunahan Bilgili</p>
                <br>
            </div>

            <div id="rd-box">
                <img src="<?php echo asset_url('images/mm.png') ?>" width="135px" height="105px" alt="" />
                <h1>Mechatronics Engineering</h1>

                <p>Atakan Türker</p>

                <p>Edin Sancaklı</p>
            </div>
        </div>
    </center>


</div>



<!-- anasayfa divi sonu -->
<!-- shift+alt+f -->