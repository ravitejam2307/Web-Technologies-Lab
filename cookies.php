<!-- cookies.php -->
<!-- Writing a cookie to the client. -->
<?php 
   define( "FIVE_DAYS", 60 * 60 * 24 * 5 ); // define constant

   // write each form field’s value to a cookie and set the 
   // cookie’s expiration date
   setcookie( "name", $_POST["name"], time() + FIVE_DAYS );    
   setcookie( "height", $_POST["height"], time() + FIVE_DAYS );
   setcookie( "color", $_POST["color"], time() + FIVE_DAYS );  
?><!-- end PHP script -->

<!DOCTYPE html>

<html>
   <head>
      <meta charset = "utf-8">
      <title>Cookie Saved</title>
      <style type = "text/css">
         p { margin: 0px; }
      </style>
   </head>
   <body>
      <p>The cookie has been set with the following data:</p>
      
      <!-- print each form field’s value -->
       <p>Name: 
           <?php print( $Name ) ?></p>
       <p>Height: 
           <?php print( $Height ) ?></p>
       <p>Favorite Color:
       <span style = "color: <?php print( "$Color" ) ?> ">
        <?php print( "$Color" ) ?></span></p>
     <p>Click <a href = "readCookies.php">here</a>
         to read the saved cookie.</p>
   </body>
</html>

