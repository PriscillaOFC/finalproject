<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Pixies - Event Design Contact Form</title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/portal.css" />
  <link rel="stylesheet" href="css/nav.css" />
  <link rel="stylesheet" href="css/forms.css" />
 </head>
 <body>
     <header>
     <div id="logo"> <img class="logo" src="images/okpixies.png" height="75px" width="75px" alt="Pixies Logo"></div>
      <h1>Contact Us</h1>
     <!-- Trying1 -->
     <nav>
      <label for="drop" class="toggle">Menu</label>
      <input type="checkbox" id="drop" />
          <ul class="menu">
              <li><a href="template.html" class="active">About Us</a></li>
              <li><a href="portfolio.html">Portfolio</a></li>
              <li><a href="calendar.html">Event Calendar</a></li>
              <li><a href="contact.php">Contac Us</a></li>
              <li>
                  <!-- First Tier Drop Down -->
                  <label for="drop-1" class="toggle">Services</label>
                  <a href="services.html">Services</a>
                  <input type="checkbox" id="drop-1"/>
                  <ul>
                      <li><a href="#">Weddings</a></li>
                      <li><a href="#">Baby Showers</a></li>
                      <li><a href="#">Birthday Parties</a></li>
                  </ul> 

              </li>
          </ul>
      </nav>
<!-- trying1 -->
     </header>
     
   <div class="wrapper">
       
       <h2 class="subheader">Contact Us</h2>
       <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "pixies.eventdesign@outlook.com";  //place your/your client's email address here
        $toName = "Mayela Garcia"; //place your client's name here
        $website = "Pixies - Event Design";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	      ?>
       <p class="clear-recaptcha"></p>
       
     <footer>
      <p><small>&copy; 2023 by 
          <a href="contact.php">Priscilla Flores</a>, All Rights Reserved ~ 
          <a id="html-checker" href="#">Check HTML</a> ~ 
          <a id="css-checker" href="#">Check CSS</a> ~ 
          <a id="disclaimer" href="disclaimer.html">Disclaimer</a>
        </small>
     </p>
    </footer>
  </div>
     
  <!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->
     
  <script>
    //https://tinyurl.com/dynamic-html-checker
    document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
      
    document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);  
    
    //manages mobile nav 
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }   
 </script>
     
 </body>
</html>