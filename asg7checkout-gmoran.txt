<?php

session_start();
loadPage();

function validateSong() {

    $song = $_POST['song'];


    if (isset($song)) {

        if ($song == 'ladyGaga') {
            $songName = "Lady Gaga - Till It Happens To You";
            $price = 0.99;
        }
        if ($song == 'taylorSwift') {
            $songName = "Taylor Swift - Bad Blood";
            $price = 1.99;
        }
        if ($song == 'asleepAtTheWheel') {
            $songName = "Asleep At The Wheel - Faded Love";
            $price = 5.99;
        }
        if ($song == 'groupFantasma') {
            $songName = "Groupo Fantasma - Nada";
            $price = 0.99;
        }
        if ($song == 'fergie') {
            $songName = "Fergie - Fergalicious";
            $price = 599.99;
        }

        $finalPrice = calculatePrice($price);

        print
          "<img alt='Cover' src='./images/$song.jpg' width='150' height='150'>\n".
          "<h4> $songName </h4>\n".
          "<strong>Price</strong>: $price + tax\n".
          "<br><br>\n".
          "<button class='btn btn-danger'>Buy for $finalPrice</button><br><br>\n".
          "*All Sales Are <strong>FINAL.</strong> No Refunds!\n";

    }
}

function calculatePrice($price) {

    $price = $price + ($price * 0.10);
    return $price;

}

function checkLogin() {

  $loggedIn = $_SESSION['loggedIn'];
  $username = $_SESSION['username'];
  $password = $_SESSION['password'];

    if (isset($loggedIn)) { //Is the session active?

        if ($loggedIn == 1) { //check if we're logged in

            if ($username == 'user' && $password == 'password') { //verify user/pass
                validateSong();
            }
        }
        return;
    }

    print "<h3>You Must <a href='./asg7login.php'>Log In</a> To Continue </h3><br> \n";
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

      "                  Checkout Page\n".

      "              </div>\n".
      "          </div>\n".
      "      </div>\n".
      "    </div>\n".
      "    <!-- End Page header -->\n".

      "    <!-- Start container -->\n".
      "    <div class='container-fluid text-center'>\n".
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
