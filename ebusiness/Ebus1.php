<!DOCTYPE html>
<html>
    
    <head>
        <title>Select Product</title>
        <link rel= "stylesheet" href= "../ebusiness.css" type = "text/css" />
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        
    </head>
    <body>
        
        <h2>Xander's Cloud Store</h2>
        <!-- Adding dropdown menu -->
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
        <form method ="POST" action="Ebus2.php">
            
            <h4>Select a Product</h4>
            <br>
            <br>
            <label for="salesforce">
                <input type="radio" id ="salesforce" name ="product" checked onClick="disablebtnProceed()"/>
                Salesforce @ $100
            </label>
            
            <br>
            
            <label for "cloud9">
                <input type="radio" id="cloud9" name="product" checked onClick="disablebtnProceed()"/>
                Cloud 9 @ $200
            </label>
            
            <br>
            
            <label for "aws">
                <input type="radio" id="aws" name="product" checked onClick="disablebtnProceed()"/>
                Amazon Web Services @ $300
            </label>
            
            <br>
            
            <label for "gmail">
                <input type="radio" id="gmail" name="product" checked onClick="disablebtnProceed()"/>
                Gmail @ $400
            </label>
            
            <br/>
            <br/>
            
            
            
            <label for ="SubTotal">
                Sub Total
                <input type="text" id="SubTotal" value = "0.00" name="SubTotal" readonly/>
            </label>
            
            
            <br>
            <label for="discount">
                Discount @ 5%
                <input type="text" id="discount" value="0.00" name="discount" readonly/>
            </label>
            <br>
            <label for="vat">
               Vat @ 10%
               <input type="text" id="vat" value="0.00" name="vat" readonly/>
            </label>
            <br>
            <label for="total">
                Total
                <input type="text" id="total" value="0.00" name="total" readonly/>
            </label>
            <br><br>
            <button type="submit" id="btnProceed" disabled class="ebusbutton">Add to Shopping Cart</button>
            
        </form>
        
        <br/>
        
        <!-- Call function to perform calculations -->
        <button onCLick="calcSub()" class="ebusbutton">Calculate Cost</button>
        
        <!-- reload page to clear data -->
        <button><a role="button" href="Ebus1.php" class="ebusbutton">Clear Choice</a></button>
        <br><br></div>
    </body>
    
</html>