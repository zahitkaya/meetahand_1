<div class="contact">
  <div class="contact with us" align=center>
    <!DOCTYPE html>
    <html>

    <head>
      <br> <br>

      <div class="contactjpg" align=center>

        <a href="<?php echo url  ?>"><img src="<?php echo asset_url('/images/img2.jpg'); ?>" alt="contactt" height="200px" max-width="500px" /></a>

      </div>





      <form action="" class="form1" method="POST">

        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name.." required>

        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>

        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="Your email.." required>

        <label for="message">Message</label>

        <textarea id="message" name="message" placeholder="Your message.." style="width:300px" required></textarea>

        <br><br>
        <input type="submit" value="Submit" name="submit">

        <?php

        if (empty($_POST['email']) || empty($_POST['firstname']) ||  empty($_POST['firstname']) ||  empty($_POST['firstname'])) {
          
        } else {
          $firstname = trim($_POST['firstname']);
          $firstname = strip_tags($firstname);
          $firstname = htmlspecialchars($firstname);


          $email = trim($_POST['email']);
          $email = strip_tags($email);
          $email = htmlspecialchars($email);

          $lastname = trim($_POST['lastname']);
          $lastname = strip_tags($lastname);
          $lastname = htmlspecialchars($lastname);

          $message = trim($_POST['message']);
          $message = strip_tags($message);
          $message = htmlspecialchars($message);

          if (isset($_POST['submit'])) {

            mysqli_query($conn, "INSERT INTO contact (firstname, lastname,email,message) VALUES ('$firstname','$lastname','$email','$message')");

            echo '<script>alert("Message Received ") ;
                    window.location.replace("'.url.'");
                    </script>';  


          }
        }

        ?>

      </form>






      <style>
        body {
          font-family: Arial, Helvetica, sans-serif;
        }

        * {
          box-sizing: border-box;
        }

        input[type=text],
        select,
        textarea {
          max-width: 300px;
          padding: 12px;
          border: 1px solid #ccc;
          border-radius: 4px;
          box-sizing: border-box;
          margin-top: 6px;
          margin-bottom: 16px;
          resize: vertical;
        }

        .form1 {
          display: flex;
          flex-direction: column;
          justify-content: center;
          align-items: center;
        }

        input[type=submit] {
          background-color: #4CAF50;
          color: white;
          padding: 12px 20px;
          border: none;
          border-radius: 4px;
          cursor: pointer;
        }

        input[type=submit]:hover {
          background-color: #45a049;
        }

        .container {
          border-radius: 5px;
          background-color: #f2f2f2;
          padding: 20px;
        }
      </style>