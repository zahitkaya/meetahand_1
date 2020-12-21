<html>
    <head>
    <title>Sign In</title>
     <link rel ="stylesheet" type="text/css" href="homepage.css">
     
    </head>
    <body bgcolor="#f7f1e3" > 
      
          <div class="header">
    <div class="header-right">
    <a href="#contact">Contact</a>
    <a href="#about">About</a>
     </div>
         </div>    
           
         
         <ul class="menu">
          <a href="index.php"><img src="Meetahandlogosign.jpg" alt="logo" height="100px" name="lo"/></a>
          
     
            <li><a href="#">Contact</a></li>
           
            <li><a href="#">About</a></li>
            
             <li class="has-sub"><a href="#"> Store </a>
                 <ul>
            <li><a href="#">Books</a></li>
            <li><a href="#">Lecture Packages</a></li>
            <li><a href="#">Shop</a></li>
                </ul>
            </li>   
            
            <li><a href="#"> Appointment</a></li> 
            
            <li class="has-sub"><a href="lecnotes.php"> Lecture Notes </a>
                 <ul>
            <li><a href="#"> Mechatronics Engineering </a></li>
            <li><a href="#"> Electrical-Electronics Engineering </a></li>
            <li><a href="#"> Computer Engineering </a></li>
                </ul>
              </li>   
     
              <li><a href="index.php" > Home</a></li>         
        </ul>   
                    
                  <!-- side menu -->
 <div id="info" class="sidenav">
  <a href="#" id="mission">Mission</a>
  <a href="#" id="Content">Content</a>
  <a href="#" id="projects">Projects</a>
</div>  
                  
                  
/*sidebar*/
#info a {
  position: absolute;
  left: -100px;
  transition: 500ms; 
  padding: 15px;
  width: 120px; 
  text-decoration: none; 
  font-size: 18px; 
  color: #fff;
  border-radius: 0 5px 5px 0; 
}

#info a:hover {
  left: 0;
}
#mission{
  top: 300px; background-color: #d1ccc0;
}
#Content{
  top: 360px; background-color: #aaa69d;
}
#projects {
  top: 420px; background-color: #84817a; 
}

   
    <div class="si">
  <form action="/SignIn.php" class="container">
    <h1>Login</h1>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="pass"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" id="pass" required>

    <button type="submit" class="btn" id="btn" >Login</button>
  </form>
</div> 
        
       
   
    </body>
</html>

 