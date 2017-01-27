<?php

require "classfun.php";

printDocHeading("./css/start.css", "COSC 2328");

print

"<!--  body of document starts here  -->\n".
"<body>\n".
"<div class='heading'>\n".
  "<h2>Guillermo's COSC 2328 Website</h2>\n".
"</div>\n".
"<div class='content'>\n".
"<!--  float left starts here -->\n".
 "<div class='floatleft'>\n".
 "<h3> Education </h3>\n".

    "B.S in Computer Science at St. Edward's University\n".
    "<br/><br/>\n".
    "Expected Graduation Date: May 2018\n".

 "<h4> Hobbies and Skills </h4>\n".
 "<ul>\n".
 "<li> iOS Development</li>\n".
 "<li> Film/Photography </li>\n".
 "<li> Soccer </li>\n".
 "<li> Playing with dogs </li>\n".
 "<li> Music </li>\n".
 "<li> Sarcasm </li>\n".
 "</ul>\n".

 "<h4> COSC 2328 Assigments </h4>\n".
 "<ul>\n".
   "<li><a href='./inclass1.php'> In Class Assignment #1 </a></li>\n".
 "</ul>\n".

 "<h4> Helpful Links </h4>\n".

  "<a href='http://validator.w3.org'> HTML Validator </a>\n".
  "<br /><br />\n".

  "<a href='http://w3schools.com/html/default.asp'> HTML Reference </a>\n".
  "<br /><br />\n".

  "<a href='http://w3schools.com/css/default.asp'> CSS Reference </a>\n".
  "<br /><br />\n".

  "<a href='http://www.w3schools.com/php/default.asp'> PHP Reference </a>\n".
  "<br /><br />\n".

  "<a href='http://htmlcolorcodes.com/color-picker/'> Color Picker </a>\n".
  "<br /><br />\n".

  "<a href='http://gmoran.create.stedwards.edu/cosc2328/'> COSC 2328</a>\n".
 "</div>\n".
"<!--  end of float left  -->\n".
"<!--  start new float left  -->\n".
 "<div class='floatleft'>\n".
  "<div class='border'>\n".

      "<img src='./images/fiona.jpg' alt='Fiona, The Pug' height='250' width='250'/>\n".

      "<br />\n".
         "Fiona, The Pug.\n".
      "<br />\n".

   "</div>\n".
 "</div>\n".
"<!--  end of float left  -->\n".
"<div class='clear'></div>\n".
"<p class='footer'>\n".
 "St. Edward&apos;s University | COSC 2328 - Web Programming | Spring 2016\n".
"</p>\n".

"</div>\n".
"<!--  end of content  -->\n".
"</body>\n".
"</html>";


?>
