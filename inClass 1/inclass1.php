<?php

#Variables

$firstName = $_POST['firstname'];
$hometown  = $_POST['hometown'];

print
    "<!DOCTYPE html> \n".
    "<html> \n".
    "<body> \n".
    "<center> \n".

        "<h1> In Class Assignment #1 </h1> \n".
        "<h6> By Guillermo Moran </h6> \n";

    if (isset($firstName, $hometown)) {

          print "Your first name is: " . $firstName;
          print "<br><br>";
          print "Your hometown is: " . $hometown;
    }
    else {

      print

          "<form action = './inclass1.php' method = 'post'> \n".
          "First Name<br>".
          "<input type = 'text' name = 'firstname'> \n".
          "<br><br>".
          "Home Town<br>".
          "<input type = 'text' name = 'hometown'> \n".
          "<br><br>".
          "<input type = 'submit'>";


    }

print
    "</center> \n".
    "</body> \n".
    "</html> \n";

?>
