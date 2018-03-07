<?php
//start the session
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Enter Details</title>
         <link rel= "stylesheet" href= "../ebusiness.css" type = "text/css" />
    
    <!--jQuery-->
    <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="ebus2_validator.js"></script>
    </head>
 
    
    <body>
        <br>
        
        <h2>Xander's Cloud Store</h2>
        
        <!-- Adding dropdown menu -->
        <nav class="menu">
          <button class="dropbtn"><a href="../homepage.html">Home</a></button>
          <div class="dropdown">
              <button class="dropbtn">Curriculum Vitae</button>
              <div class="submenu">
                  <a href="cv_page1.html">Personal Details</a>
                  <a href="cv_page2.html">Education</a>
                  <a href="cv_page3.html">Work Experience</a>
              </div>
          </div>
         <div class="dropdown">
             <button class="dropbtn">Interests</button>
             <div class="submenu">
                 <a href="../Interests/sports.html">Sports</a>
                 <a href="../Interests/travel.html">Travel</a>
                 <a href="../Interests/cloud.html">Cloud Services</a>
             </div>
         </div>
         <button class="dropbtn"><a href="ebusiness/Ebus1.php">Shop</a></button>
         </nav>
        
        <br>
        <div class="content">
        <h4>Please Enter Your Payment Details</h4>
        
        <form action="ebus_3.php" method="POST">
            <label for="user_pin">PIN</label>
            <input type="password" id="user_pin" name="user_pin" placeholder="Card PIN" maxlength="4">
            <br>
            <br>
            <label for"user_name">Name:</label>
            <input type="text" id="user_name" name="user_name" placeholder="Full name">
            <br>
            <br>
            <label for="user_email">E-mail:</label>
            <input type="text" id="user_email" name="user_email" placeholder="email">
            <br><br>
            <button type="submit" id="btnPurchase" class="ebusbutton" disabled>Proceed with Purchase</button>
            <br><br>
            <p>Please validate details before proceeding.</p>
        </form>
        <br/>
        <!-- Call function to ensure no fields are left blank -->
        <button onClick="ValidateDetails()" class="ebusbutton">Validation</button>
        </div>
        
        
        <?php
        //set session variables
        $_SESSION["total"]=$_POST["total"];
        $_SESSION["user_name"] = $_POST["user_name"];
        $_SESSION["user_email"] = $_POST["user_email"];
        ?>
        
    </body>
</html>