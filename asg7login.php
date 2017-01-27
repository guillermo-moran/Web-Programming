<?php

session_start();
loadPage();

function checkLogin() {

  $username = $_POST['username'];
  $password = $_POST['password'];

  if (isset($_POST['username']) && isset($_POST['password'])) {

    if ($username == "user" && $password == "password") {

      //Set session variables
        $_SESSION['loggedIn'] = 1;
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;

        print "<h3>Log in successful! <br><br>  Click <a href='./asg7music.php'>here</a> to continue </h3><br> \n";
        return;
    }
    print "To log in, try username 'user' and password 'password' <br><br>\n";
  }
  printLoginForm();
  return false;
}

function printLoginForm() {

  print

    "              <form name='loginForm' action='asg7login.php' method='post'>\n".
    "                <input class='form-control' required name='username' maxlength='20' placeholder='Username'></textarea>\n".
    "                <br>\n".
    "                <input class='form-control' type='password' required name='password' maxlength='20' placeholder='Password'></textarea>\n".
    "                <br><br>\n".
    "                <button type='submit' class='btn btn-primary'>Login</button>\n".
    "            </form>\n";

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

      "                  Authentication Page\n".

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
