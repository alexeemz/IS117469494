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
        
        <br>
        <div class="content">
        <br><h4>RECEIPT</h4>
        <br>
        <?php
        //Echo session variables that were set on previous page
        echo "Total is " . $_SESSION["total"] . ".";
        ?>
        </div>
    </body>
</html>