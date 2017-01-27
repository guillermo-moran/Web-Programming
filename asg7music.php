<?php

session_start();
loadPage();

function checkLogin() {

  $loggedIn = $_SESSION['loggedIn'];
  $username = $_SESSION['username'];
  $password = $_SESSION['password'];

    if (isset($loggedIn)) { //Is the session active?

        if ($loggedIn == 1) { //check if we're logged in

            if ($username == 'user' && $password == 'password') { //verify user/pass
                printSongList();
            }
        }
        return;
    }

    print "<h3>You Must <a href='./asg7login.php'>Log In</a> To Continue </h3><br> \n";
}
function printSongList() {

  print
    "<br><p>Please make a song selection below:\n</p>";

  print

    "<form action='asg7checkout.php' method='post'>\n".
    "   <select name='song' class='form-control'>\n".
    "      <option value='ladyGaga'>Lady Gaga - Till It Happens To You</option>\n".
    "      <option value='taylorSwift'>Taylor Swift - Bad Blood</option>\n".
    "      <option value='asleepAtTheWheel'>Asleep At The Wheel - Faded Love</option>\n".
    "      <option value='groupFantasma'>Groupo Fantasma - Nada</option>\n".
    "      <option value='fergie'>Fergie - Fergalicious</option>\n".
    "   </select>\n".
    "   <br><br>\n".
    "   <div class='text-center'>\n".
    "       <button type='submit' class='btn btn-primary'>Purchase Song</button>\n".
    "   </div>\n".
    "</form>\n";

}


function loadPage() {

  print

      "<!DOCTYPE html>\n".

      "<html lang='en'>\n".
      "<head>\n".
      "    <title>Assignment 7</title>\n".
      "    <meta charset='utf-8'>\n".
      "    <meta name='viewport' content='width=device-width, initial-scale=1'>\n".

      "    <!--Bootstrap Stuff-->\n".
      "    <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>\n".
      "    <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>\n".

      "    <!-- My own styling -->\n".
      "    <link rel='stylesheet' href='./css/music.css'>\n".
      "</head>\n".


      "<!--Start Body-->\n".
      "<body>\n".

      "  <!-- Navigation Bar-->\n".

      "  <nav class='navbar navbar-inverse navbar-fixed-top'>\n".
      "      <div class='container-fluid'>\n".
      "          <div class='navbar-header'>\n".
      "              <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#myNavbar'>\n".
      "                  <span class='icon-bar'></span>\n".
      "                  <span class='icon-bar'></span>\n".
      "                  <span class='icon-bar'></span>\n".
      "                </button>\n".

      "                <a class='navbar-brand' href='http://gmoran.create.stedwards.edu/'>\n".
      "                    <img alt='Brand' src='../images/gm-logo.png' width='40' height='20'>\n".
      "                </a>\n".

      "          </div> <!-- navbar-header -->\n".

      "      <div class='collapse navbar-collapse' id='myNavbar'>\n".
      "          <ul class='nav navbar-nav'>\n".
      "              <li class='active'><a href='./index.html'>Home</a></li>\n".
      "              <!-- <li><a href='#'>Page 1</a></li> -->\n".

      "          </ul>\n".
      "      </div> <!-- navbar-collapse -->\n".
      "    </div> <!-- container-fluid -->\n".
      "  </nav>\n".
      "  <!-- End Navigation -->\n".

      "    <!-- Page Header -->\n".
      "    <div class='container-fluid text-center'>\n".
      "      <div class='row'>\n".
      "          <div class='col-md-12'>\n".
      "              <div class='page-header'>\n".
      "                  <div id='pageTitle'>\n".

      "                      <h1>The Music Download Store</h1>\n".

      "                  </div>\n".

      "                  Music Selection\n".

      "              </div>\n".
      "          </div>\n".
      "      </div>\n".
      "    </div>\n".
      "    <!-- End Page header -->\n".

      "    <!-- Start container -->\n".
      "    <div class='container-fluid'>\n".
      "        <div class='row'>\n".

      "            <div class='col-sm-6 col-sm-offset-3'>\n";

                      checkLogin();

    print

      "            </div>\n".
      "        </div>\n".
      "    </div>\n".
      "    <!-- End container -->\n".


      "    <!-- Start bg-content (footer) -->\n".
      "    <div class='container text-center' id=footer>\n".
      "        <p>\n".
      "          Copyright &copy; 2016 Guillermo Morán | Made with love for <a href='http://gmoran.create.stedwards.edu/cosc2328'> COSC 2328</a>\n".
      "        </p>\n".
      "    </div>\n".
      "    <!-- End bg-content (footer) -->\n".

      "</body>\n".
      "</html>\n";
}

?>
