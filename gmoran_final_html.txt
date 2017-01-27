<!DOCTYPE html>

<!--
    Web template made by Guillermo Moran
    January 2016

    Color Scheme: https://coolors.co/app/242424-931621-e8aa00-247ba0-f25f5c
-->

<html lang="en">
<head>
    <title>Final</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Bootstrap Stuff-->

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <!-- My own styling -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/content.css">

</head>


<!--Start Body-->

<body>

    <?php
        require_once '../header.php';
        printNavBar();
    ?>
    <!-- bg-top -->
    <div class="container bg-top text-center" id="top-container">

        <img id="top-image" src="./images/shirt.png" class="img-circle" alt="ATX" width="80" height="80">

        <h3>Shirt Order Form</h3>
        <br>

        <?php
            require_once './final_form.php';
            generateForms();
        ?>

    </div>
    <!-- End bg-top -->

    <!-- I'm lazy so here's some line breaks instead -->
    <br><br>

    <!-- bg-content -->
    <div class="container bg-content" id="content">

      <div class="row">
          <div class="col-sm-6 col-sm-offset-3 text-center">

            <?php
                require_once './final_form.php';

                $name = $_POST['name'];
                $color = $_POST['color'];
                $size = $_POST['size'];

                if (isset($color) && isset($size)) {
                    printSelection($name, $color, $size);
                }
                else {
                    print "<h3> Make a selection </h3>\n";
                }
            ?>

          </div>
      </div>

    </div>
    <!-- End bg-content -->

    <!-- Start bg-footer -->
    <div class="container bg-footer text-center">
        <p>
          Please give me an A in <a href="http://gmoran.create.stedwards.edu/cosc2328">COSC 2328</a>
        </p>
    </div>
    <!-- End bg-4 (footer) -->

</body>
</html>
