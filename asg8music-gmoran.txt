<?php

include ('../adodb519/adodb5/adodb.inc.php');
session_start();
loadPage();

function checkLogin() {

  $loggedIn = $_SESSION['loggedIn'];

    if (isset($loggedIn)) { //Is the session active?

        if ($loggedIn == 1) { //check if we're logged in

            printSongList();
        }
        return;
    }

    print "<h3>You Must <a href='./asg8login.php'>Log In</a> To Continue </h3><br> \n";
}
function printSongList() {

  print
    "<br><p>Please make a song selection below:\n</p>";

  //Print start of drop menu
  print

    "<form action='asg8checkout.php' method='post'>\n".
    "   <select name='song' class='form-control'>\n";


  // Open a connection to the database
  //
  $db = ADONewConnection('mysql'); // Create a connection handle to the local database
  $db->PConnect('localhost',  // Host to connect to
      '',     // Database user name
      '',              // Password
      '');   // Database

  // Format and execute a SQL statement
  //
  $sql = "select songId, artist, songName from songs";
  $rs = $db->Execute($sql);

  $dbSongId   = "";
  $dbArtist   = "";
  $dbSongName = "";

  // Make sure we have results
  //
  if ($rs == false) {
      print_r($rs);
      print "<br>SQL select failed \n";
  }

  else {
      // While rows are returned, store the values in local variables
      //
      while (!$rs->EOF) {
          $dbSongId   =  $rs->fields['songId'];
          $dbArtist   =  $rs->fields['artist'];
          $dbSongName =  $rs->fields['songName'];

          //Print Options
          print "      <option value='$dbSongId'>$dbArtist - $dbSongName</option>\n";

          $rs->MoveNext();
      }
  }


  //print end of form
  print
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
