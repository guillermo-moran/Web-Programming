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

    <!-- Assignment 9 -->
    <script src="./js/asg9.js"></script>

    <!-- My own styling -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/content.css">

</head>


<!--Start Body-->

<body>

    <?php
        require '../header.php';
        printNavBar();
    ?>
    <!-- bg-top -->
    <div class="container bg-top text-center" id="top-container">

        <img id="top-image" src="./images/atx_entertainment.png" class="img-circle" alt="ATX" width="80" height="80">

        <h3>Austin Entertainment</h3>

        <div class="row">
          <div class="col-sm-6 col-sm-offset-3">
            <div class="form-group">
              <select class="form-control" name="choices" id="choices">
                <option value="restaurants"> Restaurants </option>
                <option value="theatres"> Theatres </option>
                <option value="activities"> Entertainment </option>
              </select>
              <br>
              <button id="findBtn" class='btn btn-primary' onclick='showTable()'>Find Places</button>
            </div>
          </div>
        </div>


    </div>
    <!-- End bg-top -->


    <!-- bg-title -->
    <div class="container bg-title text-center" id="contentSec">
      <article id="about">
        <h3>Results</h3>

        <p id='returnText'>
          Please make a selection
        </p>

      </article>
    </div>
    <!-- End bg-title -->

    <!-- bg-content -->
    <div class="container bg-content" id="content">

      <div class="row">
          <div class="col-sm-6 col-sm-offset-3">

              <div id="myAustin">
                  Please make a selectinon
              </div>

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
