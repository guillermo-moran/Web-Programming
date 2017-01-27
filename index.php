<!DOCTYPE html>

<!--
    Web template made by Guillermo Moran
    January 2016

    Color Scheme: https://coolors.co/app/242424-931621-e8aa00-247ba0-f25f5c
-->

<html lang="en">
<head>
    <title>GMoran</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Bootstrap Stuff-->

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="../js/animations.js"></script>

    <!-- My own styling -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/content.css">

</head>


<!--Start Body-->

<body>

    <?php
        require '../header.php';
        printNavBar();
    ?>
    <!-- bg-top -->
    <div class="container bg-top text-center">

        <img src="../images/fiona.jpg" class="img-circle" alt="Fiona" width="120" height="120">
        <h2>Web Programming (COSC 2328)</h2>

        <a href="./final.php"> See Final Exam Here </a>

    </div>
    <!-- End bg-top -->

    <!-- bg-title -->
    <div class="container bg-title text-center" id="assignmentsSec">
      <article id="assignmentsTitle">
        <h2>Assignments and Links</h2>
        All of my COSC 2328 Assignments
        <br><br>
        <button type="button" id="showAssignments" class="btn btn-primary">
            Show Assignments
        </button>

      </article>
    </div>
    <!-- End bg-title -->

    <!-- Start bg-aboutme -->

    <div class="container bg-assignments" id="assignments">

      <div class="row">
        <div class="col-sm-5 col-sm-offset-1">

          <h3>Homework</h3>
          <ul>
            <li><a href="./old_home"> Original Homepage </a></li>

            <li><a href="./index_old.html"> Assignment #1 </a></li>

            <li><a href="./asg2.php"> Assignment #2 </a></li>

            <li><a href="./asg3.html"> Assignment #3 </a></li>

            <li><a href="./blog.php"> Assignment #4 (Blog) </a></li>

            <li><a href="./asg5.html"> Assignment #5 </a></li>

            <li><a href="./movies.php"> Assignment #6 </a></li>

            <li><a href="./asg7login.php"> Assignment #7 </a></li>

            <li><a href="./asg8login.php"> Assignment #8 </a></li>

            <li><a href="./asg9.php"> Assignment #9 </a></li>

            <li><a href="http://gmoran.create.stedwards.edu/cgi-bin/python/asg10.cgi"> Assignment #10 </a></li>
          </ul>

        </div>

        <div class="col-sm-6">

          <h3>Class Assignments</h3>
          <ul>

            <li><a href="./final.php"> Final </a></li>

            <li><a href="./inclass1.php"> Assignment #1 </a></li>

            <li><a href="./inClassDrawing.html"> Drawing Assignment </a></li>

            <li><a href="./carousel.php"> Out of Class #1 </a></li>

          </ul>

          <h3>Helpful Links</h3>
          <ul>
            <li><a href="http://validator.w3.org"> HTML Validator </a></li>
            <li><a href="http://w3schools.com/html/default.asp"> HTML Reference </a></li>
            <li><a href="http://w3schools.com/css/default.asp"> CSS Reference </a></li>
            <li><a href="http://www.w3schools.com/php/default.asp"> PHP Reference </a></li>
            <li><a href="http://htmlcolorcodes.com/color-picker/"> Color Picker </a></li>
          </ul>

        </div>

      </div>

    </div>

    <!-- End bg-aboutme -->

    <!-- bg-title -->
    <div class="container bg-title text-center" id="contentSec">
      <article id="about">
        <h2>Resumé</h2>
        A little more information about me

      </article>
    </div>
    <!-- End bg-title -->

    <!-- bg-content -->
    <div class="container bg-content" id="content">

      <div class="row">
        <div class="col-sm-8">

          <strong>Name: </strong>Guillermo Moran
          <br>
          <strong>Major: </strong>B.S in Computer Science
          <br>
          <strong>Expected Graduation Date: </strong>May 2018
          <br><br>
          <strong>Education:</strong>
          <br>
          - University of Texas at Brownsville (2014-2015)
          <br>
          - St. Edward's University (2015 - Current)
          <br><br>

        </div>

        <div class="col-sm-4">

          <strong>Hobbies and Skills:</strong>
          <br>
          - iOS Development
          <br>
          - Film and Photography
          <br>
          - Soccer
          <br>
          - Playing with Dogs
          <br>
          - Music
          <br>
          - Sarcasm
          <br>
          - Puns

        </div>
      </div>
    </div>
    <!-- End bg-content -->

    <!-- Start bg-footer -->
    <div class="container bg-footer text-center">
        <p>
          Copyright &copy; 2016 Guillermo Morán | Made with love for <a href="http://gmoran.create.stedwards.edu/cosc2328">COSC 2328</a>
        </p>
    </div>
    <!-- End bg-4 (footer) -->

</body>
</html>
