<!DOCTYPE html>

<!--
    Web template made by Guillermo Moran
    January 2016

    Color Scheme: https://coolors.co/app/931621-28464b-326771-2c8c99-42d9c8
-->

<html lang="en">
<head>
    <title>COSC 2328</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Bootstrap Stuff-->

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <!-- My own styling -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/legacy-content.css">
</head>

<!--Start Body-->
<body>

  <?php
      require '../header.php';
      printNavBar();
  ?>

    <!-- Page Header -->
    <div class="container bg-header">
        <div class="page-header">
            <h1 class="heading">COSC 2328</h1>
        </div>
    </div>
    <!-- End Page header -->

    <!-- Start bg-content -->
    <div class="container bg-content">
      <div class="row"> <!-- Start Row -->
          <div class="col-md-3" > <!-- Sidebar Column -->


              <div class="well">

                <h4 class="heading">Homework</h4>
                <ul>
                  <li><a href="./old_home"> Original Homepage </a></li>
                  <br>
                  <li><a href="./index_old.html"> Assignment #1 </a></li>
                  <br>
                  <li><a href="./asg2.php"> Assignment #2 </a></li>
                  <br>
                  <li><a href="./asg3.html"> Assignment #3 </a></li>
                  <br>
                  <li><a href="./blog.php"> Assignment #4 (Blog) </a></li>
                  <br>
                  <li><a href="./asg5.html"> Assignment #5 </a></li>
                  <br>
                  <li><a href="./movies.php"> Assignment #6 </a></li>
                  <br>
                  <li><a href="./asg7login.php"> Assignment #7 </a></li>
                </ul>

                <h4 class="heading">Class Assignments</h4>
                <ul>
                  <li><a href="./inclass1.php"> Assignment #1 </a></li>
                  <br>
                  <li><a href="./inClassDrawing.html"> Drawing Assignment </a></li>
                </ul>

                <h4 class="heading">Helpful Links</h4>
                <ul>
                  <li><a href="http://validator.w3.org"> HTML Validator </a></li><br>
                  <li><a href="http://w3schools.com/html/default.asp"> HTML Reference </a></li><br>
                  <li><a href="http://w3schools.com/css/default.asp"> CSS Reference </a></li><br>
                  <li><a href="http://www.w3schools.com/php/default.asp"> PHP Reference </a></li><br>
                  <li><a href="http://htmlcolorcodes.com/color-picker/"> Color Picker </a></li><br>
                </ul>

              </div>

          </div> <!-- End Sidebar Column -->

          <div class="col-md-7" > <!-- Content Column -->

              <h3>Education</h3>
                  B.S in Computer Science at St. Edward's University
                  <br><br>
                  Expected Graduation Date: May 2018

              <h3>Hobbies and Skills</h3>
                  <ul>
                    <li>iOS Development</li>
                    <li>Film/Photography</li>
                    <li>Soccer</li>
                    <li>Playing with dogs</li>
                    <li>Music</li>
                    <li>Sarcasm</li>
                  </ul>
          </div> <!-- End Content Column -->

          <!-- Dog Column -->
          <div class="col-md-1 text-center" >
            <img src="../images/fiona.jpg" class="img-dog" alt="Dog" width="150" height="150">
          </div>
          <!-- End Dog Column -->

      </div> <!-- End Row -->

    </div>
    <!-- End bg-content -->


    <!-- Start bg-content (footer) -->
    <div class="container bg-content text-center">
        <p>
          Copyright &copy; 2016 Guillermo Morán | Made with love for <a href="http://gmoran.create.stedwards.edu/cosc2328"> COSC 2328</a>
        </p>
    </div>
    <!-- End bg-content (footer) -->

</body>
</html>
