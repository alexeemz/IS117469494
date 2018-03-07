<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
         <link rel= "stylesheet" href= "../ebusiness.css" type = "text/css" />
    </head>
    <body>
        
        <h2>Purchase Receipt</h2>
        
        <!-- Adding dropdown menu-->
        <nav class="menu">
          <button class="dropbtn"><a href="../homepage.html">Home</a></button>
          <div class="dropdown">
              <button class="dropbtn">Curriculum Vitae</button>
              <div class="submenu">
                  <a href="../CV/cv_page1.html">Personal Details</a>
                  <a href="../CV/cv_page2.html">Education</a>
                  <a href="../CV/cv_page3.html">Work Experience</a>
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
         <button class="dropbtn"><a href="Ebus1.php">Shop</a></button>
         </nav>
        
        <br>
        <div class="content">
        <h4>RECEIPT</h4>
        <br>
        
        
         <?php
        // Set session variables
        $_SESSION["user_name"] = $_POST["user_name"];
        $_SESSION["user_email"] = $_POST["user_email"];
        
        ?>
        
    <!--Echo session variables that were set on previous page-->
        <?php
        echo "Name: " . $_SESSION["user_name"] . ".";
         ?>
         <br><br>
         <?php
         echo "E-mail: " . $_SESSION["user_email"] . ".";
        ?>
        <br><br>
        <?php
        echo "Total price: " . $_SESSION["total"] . ".";
        ?>
        <br><br>
        <h4><strong>Thank You for Shopping With Us!</strong><br><br></h4>
        </div>
        
    </body>
</html>