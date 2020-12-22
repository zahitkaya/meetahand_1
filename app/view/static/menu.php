<ul class="menu">

    <li>
        <a href="" style="display: <?php if (!isset($_SESSION['login'])) {
                                                echo  'none;';
                                            } ?>"> <?php echo $_SESSION['email'] ?> </a>
        <ul>
            <li>
                <a href="logout">Logout</a>
            </li>
            <li>
                
            </li>
            <li>
                
            </li>
        </ul>
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