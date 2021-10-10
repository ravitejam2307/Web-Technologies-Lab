<!DOCTYPE html>

<!-- readCookies.php -->
<!-- Displaying the cookie’s contents. -->
<html>
   <head>
      <meta charset = "utf-8">
      <title>Read Cookies</title>  
      <style type = "text/css">
         p { margin: 0px; }
      </style>
   </head>
   <body>
      <p>The following data is saved in a cookie on your computer.</p>
      <?php
         // iterate through array $_COOKIE and print
         // name and value of each cookie
         foreach ($_COOKIE as $key => $value )
            print( "<p>$key: $value</p>" );
      ?><!-- end PHP script -->
   </body>
</html>

