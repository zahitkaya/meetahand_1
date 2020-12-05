<!DOCTYPE html>
<html>

<head>
    <title>başlık</title>

    <link rel="stylesheet" href=" <?= asset_url('styles/style.css'); ?>"> <!-- CSS Ekleme -->
</head>

<body>
    <a href="<?php echo url  ?>"><img src="<?php echo asset_url('images/Meetahandlogo.jpg'); ?>" alt="logo" height="155px" align="left" /></a>
    <!-- Arka plan resmi -->

    <ul class="menu">
        <li>
            <a href="signin"> Sign In</a>
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
                    echo '<li><a href='.url.'/konu/'.$key.'>';
                    echo $value;
                   
                }
                echo '</a></li>'; ?>
            </ul>
        </li>

        <li>
            <a href="<?php echo url ?>"> Home</a>
        </li>
    </ul>
    <div id="info" class="sidenav">
        <a href="#" id="mission">Mission</a>
        <a href="#" id="Content">Content</a>
        <a href="#" id="projects">Projects</a>
        <a href="#" id="contact">Contact</a>
    </div>

    <div class="anasayfa" style='<?php if ($_SERVER['REQUEST_URI'] <> "/meetahand/") echo "display:none" ?>'>
        <!-- eğer current url /meetahand/ değilse gösterme -->

        <div class="anasayfa_bolum1">
            <div class="anasayfa_bolum1_icerik" align="center">
                <!--  <div class="anasayfa_bolum1_icerik_bilgi">
                    <p> meetahand.com</p>
                    <p>Öğrencilerin dostu</p>
                    <a href="#">Hakkımızda</a>
                    <a href="#">Aramıza katıl </a>
                </div>
                <div class="anasayfa_bolum1_icerik_textarea">
                    <form action="" method="POST">
                        <textarea name="title" id="soru_textarea" cols="30" rows="10">
                         Sormak istediğiniz soruyu buraya yazın.  </textarea>
                    </form>

                </div> -->

            </div><!-- anasayfa_bolum1_icerik divi sonu -->

        </div> <!-- anasayfa_bolum1 divi sonu -->
        <div class="anasayfa_bolum2">
            <div class="anasayfa_bolum2_haberler" align=center>
                <?php
                $api = 'http://newsapi.org/v2/everything?q=bitcoin&from=2020-11-20&sortBy=publishedAt&apiKey=26fe010fe2da4bb493a5b284eec3028b';
                $response = file_get_contents($api);
                $NewsData = json_decode(($response));
                foreach ($NewsData->articles as $News) {
                ?>

                    <h2>haber</h2>
                    <img src="<?php echo $News->urlToImage; ?>" alt="" class="img_news">
                    <h3><?php echo $News->title; ?></h3>
                    <p><?php echo $News->description; ?></p>
                    <p><?php echo $News->content; ?></p>
                    <p><?php echo $News->publishedAt; ?></p>


                    <!--
                echo $News->urlToImage;
                echo $News->title;
                echo $News->description;
                echo $News->content;
                echo $News->author;
                echo $News->publishedAt;
                */
                -->


                <?php } ?>





                Buraya haber API'dan çektiğimiz haberleri gireceğiz.
            </div>
        </div><!-- anasayfa_bolum2 divi sonu -->
    </div> <!-- anasayfa divi sonu -->
    <!-- shift+alt+f -->