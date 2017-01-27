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
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/content.css">


</head>


<!--Start Body-->

<body>

    <?php
        require '../header.php';
        printNavBar();
    ?>


    <!-- bg-title -->
    <div class="container bg-top text-center" id="contentSec">
        <h3>Photos of St. Edward's University</h3>
    </div>
    <!-- End bg-title -->

    <!-- Carousel Content -->
    <div class="container bg-content text-center" id="content">

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">

          <div class="item active">
            <img src="./images/main_building.jpg" alt="Main" height="600" width="465">

          </div>

          <div class="item">
            <img src="./images/chapel.jpg" alt="Chapel" height="600" width="465">

          </div>

          <div class="item">
            <img src="./images/table.jpg" alt="Table" height="600" width="465">

          </div>

          <div class="item">
            <img src="./images/hydrant.jpg" alt="Hydrant" height="600" width="465">

          </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <!-- End Carousel Content -->

    <!-- Start bg-footer -->
    <div class="container bg-footer text-center">
        <p>
          Copyright &copy; 2016 Guillermo Morán </a>
        </p>
    </div>
    <!-- End bg-4 (footer) -->

</body>
</html>
