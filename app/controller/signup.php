<script>
    document.body.style.backgroundImage = "url(<?php echo asset_url('images/signinbg2.jpg') ?>)";
    document.body.style.backgroundRepeat = "no-repeat";
    document.getElementById("logom").style.display = "none";
</script>
<div class="sign">

    <form action="" method="POST" class="signinContainer">
        <h1>Sign up</h1>

        <label for="email"><b>Email</b></label>
        <input class="email" type="text" placeholder="Enter Email" name="email" id="email" required>

        <label for="pass"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="pass" id="pass" required>



        <button type="submit" class="btn" name="submit" style="margin-top: 4px;">Login</button>


        <?php


        $error = ''; //Variable to Store error message;
        if (isset($_POST['submit'])) {
            if (empty($_POST['email']) || empty($_POST['pass'])) {
                $error = "Username or Password is Invalid";
            } else {


                $email = trim($_POST['email']);
                $email = strip_tags($email);
                $email = htmlspecialchars($email);

                $pass = trim($_POST['pass']);
                $pass = strip_tags($pass);
                $pass = htmlspecialchars($pass);

                $query = "SELECT * FROM users WHERE user_email='$email' ";
                $result = mysqli_query($conn, $query);
                $count = mysqli_num_rows($result);



                if ($count == 1) {

                    echo "<p style=' color: red; font-size:16px; font-weight:900;'>Email already used</p>";
                } else {

                    mysqli_query($conn, "INSERT INTO users (user_email, user_pass) VALUES ('$email','$pass')");
                    $_SESSION["login"] = "true";
                    $_SESSION["pass"] = $pass;
                 
                    echo '<script>alert("Welcome '.$email.' ");
                    window.location.replace("'.url.'");
                    </script>';           
                  
                }
            }
        }




        ?>
    </form>


</div>