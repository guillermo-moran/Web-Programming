<?php

function deletePost($line) {

    $file = fopen('blog_entries.txt', 'r') or die ('No Entries Found');

    $count = 1;

    $temp = "";

    while (!feof($file)) {

        $postLine = fgets($file);

        if ($count != $line) {
            $temp = $temp . $postLine;
        }
        $count++;
    }

    fclose($file); //Close read file

    if (file_exists('blog_entries.txt')) {
        unlink('blog_entries.txt');
      }

    $filew = fopen('blog_entries.txt', 'a') or die ("An Error Occured");

    fwrite($filew, $temp);
    fclose($filew);

}

function addPost($text) {
    $file = fopen('blog_entries.txt', 'a') or die ("An Error Occured");
    $currentDate = date('Y-m-d');
    $currentTime = date('h:i:s');

    $text = str_replace("\n", ' ', $text); //remove new lines because reasons.

    $post =  "\n" . $text . "||" . "Posted on $currentDate at $currentTime";
    fwrite($file, $post);
    fclose($file);
}

function deleteAll() {
    if (file_exists('blog_entries.txt')) {
        unlink('blog_entries.txt');

        print
          "<div class='alert alert-success fade-in'>\n".
          "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>\n".
          "<strong>Success!</strong> All Entries have been deleted!\n".
          "</div>";

        return;
    }
}

function generateContentInOrder() {

    if (!file_exists('blog_entries.txt')) {

      print

      "<div class='container-fluid postBox'> <!-- Start Post Container -->\n".
          "<!-- Profile Picture Display -->\n".
          "<div class='col-sm-2'>\n".
              "<img class='profile' src='./images/fiona.jpg' alt='fiona' height='60' width='60'/>\n".
          "</div>\n".
          "<!-- End PP Display -->\n".
          "<div class='col-sm-10'> <!-- Start Post Content -->\n".
            "<div class='userNameView'>\n".
              "No Content Found\n".
            "</div>\n".
              "<br>\n".
          "</div> <!-- End Post Content -->\n".
      "</div> <!--End Post Container -->\n";
      return;
    }

    $data = file ("blog_entries.txt"); // open the file and put each line in an array element

    $reverse_data = array_reverse ($data);

    $count = count($data);
    foreach ($reverse_data as $postString) {

        if ($postString != "\n") {
          $postData = explode("||",$postString);
          $postText = $postData[0];
          $timeStamp = $postData[1];

          print

          "<div class='container-fluid postBox'> <!-- Start Post Container -->\n".
            "<!-- Profile Picture Display -->\n".
            "<div class='col-sm-2'>\n".
                "<img class='profile' src='./images/fiona.jpg' alt='fiona' height='60' width='60'/>\n".
            "</div>\n".
            "<!-- End PP Display -->\n".
            "<div class='col-sm-10'> <!-- Start Post Content -->\n".
                //"<font size='4' color='black'>Fiona (The Pug)</font>\n".

                "<div class='userNameView'>\n".
                  "Fiona (The Pug)\n".
                "</div>\n".

                "<br>\n".
                "<p>\n".
                    $postText.
                    "\n".
                "</p>\n".

                "<div class='postDelete'>\n".

                  "<form action='blog.php' method='post'>\n".
                  "<input type='hidden' name='deletePost' value=$count>\n".
                  "<button type='submit' class='btn glyphicon glyphicon-trash' name='submitDeletePost' onclick=\"return confirm('Are you sure you want to delete this?')\"></button>\n".
                  "</form>\n".

                  //"<a href='http://gmoran.create.stedwards.edu/cosc2328/blog.php?deletePost=$count' class='btn glyphicon glyphicon-trash' role='button'></a>\n".
                  //"<button type='submit' class='btn glyphicon glyphicon-trash' id='postBtn' name=''>Post</button>\n".

                "</div>\n".

                "<div class='timestampView'>\n".
                  $timeStamp.
                "</div>\n".



            "</div> <!-- End Post Content -->\n".
        "</div> <!--End Post Container -->\n";

        $count--;
        }
    }
}


if (isset($_POST['entry'])) {
    $text = $_POST['entry'];
    addPost($text);
}

if (isset($_POST['deleteAll'])) {
    deleteAll();
}

if (isset($_POST['deletePost'])) {
    $postNumber = $_POST['deletePost'];
    deletePost($postNumber);
}

print

"<!DOCTYPE html>\n".

"<!--
    Web template made by Guillermo Moran
    February 2016

    Blog
-->\n".


"<html lang='en'>\n".
"<head>\n".
    "<title>Fiona's Blog</title>\n".
    "<meta charset='utf-8'>\n".
    "<meta name='viewport' content='width=device-width, initial-scale=1'>\n".

    "<!--Bootstrap Stuff-->\n".

    "<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>\n".
    "<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js'></script>\n".
    "<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>\n".

    "<!-- My own styling -->\n".

    "<link rel='stylesheet' href='./css/blog.css'>\n".


    "<script>\n".
        "    function validateForm() { \n".
        "        var name = document.forms['entryForm']['entry'].value; \n".
        "        if (name == null || name == '') { \n".
        "            alert('You cannot submit an empty blog post.'); \n".
        "            return false; \n".
        "        } \n".
        "    }        \n".
        "</script>\n".

"</head>\n".

"<!--Start Body-->\n".
"<body>\n".

  "<!-- Navigation Bar-->\n".

  "<nav class='navbar navbar-inverse navbar-fixed-top'>\n".
      "<div class='container-fluid'>\n".
          "<div class='navbar-header'>\n".
              "<button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#myNavbar'>\n".
                  "<span class='icon-bar'></span>\n".
                  "<span class='icon-bar'></span>\n".
                  "<span class='icon-bar'></span>\n".
                "</button>\n".

                "<a class='navbar-brand' href='http://gmoran.create.stedwards.edu/'>\n".
                    "<img alt='Brand' src='../images/gm-logo.png' width='40' height='20'>\n".
                "</a>\n".

          "</div> <!-- navbar-header -->\n".

      "<div class='collapse navbar-collapse' id='myNavbar'>\n".

        "<form action='blog.php' method='post'>\n".
          "<ul class='nav navbar-nav pull-right'>\n".

              //"<li><a href='http://gmoran.create.stedwards.edu/cosc2328/blog.php?deleteAll=yes' class='btn glyphicon glyphicon-trash'></a></li>\n".


              "<li><button type='submit' class='btn btn-link navbar-btn glyphicon glyphicon-trash' name='deleteAll' onclick=\"return confirm('Are you sure you want to delete everything?')\"></button></li>\n".


          "</ul>\n".
        "</form>\n".
      "</div> <!-- navbar-collapse -->\n".
    "</div> <!-- container-fluid -->\n".
  "</nav>\n".
  "<!-- End Navigation -->\n".


    "<!-- Start container -->\n".
    "<div class='container-fluid'>\n".
      "<div class='row'> <!-- Start Row -->\n".

          "<div class='col-sm-4' > <!-- Sidebar Column -->\n".
              "<div class='well'>\n".
                    "<img class='profile' src='./images/fiona.jpg' alt='fiona' height='50' width='50'/>\n".

                    "<div class='userNameView'>\n".
                      "Fiona (The Pug)<br><br>\n".
                    "</div>\n".

              "</div>\n".

              "<div class='well'>\n".
                  "My name is Fiona. I am a 2 year old pug currently living in Brownsville, TX. My hobbies
                  include waking Guillermo up at 7am, destroying my stuffed animals, and sleeping on the
                  couch.\n".
              "</div>\n".

          "</div> <!-- End Sidebar Column -->\n".

          "<div class='col-sm-8' > <!-- Content Column -->\n".
              "<!-- Name and entry box -->\n".

              //Form Stuff goes here

              "<form name='entryForm' action='blog.php' method='post' onsubmit='return validateForm()'>\n".
                "<div class='form-group'>\n".
                    "<textarea class='form-control' rows='4' required name='entry' maxlength='150' placeholder=\"Update Fiona's Status!\"></textarea>\n".
                "</div>\n".
                "<div class='container-fluid'>\n".
                  "<button type='submit' class='btn btn-primary' id='postBtn'>Post</button>\n".
                "</div>\n".
              "</form>\n".

              //Form Stuff ends here

              "<!-- End name and entry box -->\n";

              generateContentInOrder();

      print
          "</div> <!-- End Content Container -->\n".
      "</div> <!-- End Row -->\n".
    "</div> <!-- End container -->\n".


    "<!-- Start (footer) -->\n".
    "<div class='container text-center footer'>\n".
        "<p>\n".
          "Copyright &copy; 2016 Guillermo Morán | Made with love for <a href='http://gmoran.create.stedwards.edu/cosc2328'> COSC 2328</a>\n".
        "</p>\n".
    "</div>\n".
    "<!-- End (footer) -->\n".

"</body>\n".
"</html>";



?>
