<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Stuff</title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=0">
<script>//<![CDATA[
(function(a){"use strict";navigator.userAgent.indexOf("Cydia")!=-1?(a.title=a.title.split(" \u00b7 ")[0],a.documentElement.classList.add("cydia")):a.documentElement.classList.remove("cydia","depiction")})(document)
//]]></script>
        <link rel="stylesheet" href="css/style.css">

  </head>

  <body>

    <body class="depiction">
  <header>
    <h1>I have no idea what I'm doing.</h1>
  </header>
  <main id="content" role="main">
    <ul>
      <li>
        Stuff.
      </li>
    </ul>

    <h2 id="in-this-version"> Some Files </h2>
    <?php
        echo "<ul>";
        if ($handle = opendir('./files')) {
            while (false !== ($file = readdir($handle)))
            {
                if ($file != "." && $file != ".." && $file != ".htaccess" && $file != ".htpasswd" && $file != "index.php" && $file != "index.html" && $file != "passwords.php" && $file != "error_log" && $file != "logout.php" && $file != "login.php" && $file != "css")
                {
                    $thelist .= '<a href="./files'.$file.'"><br>'.$file.'</a>';

                    //echo "<li>" . $file . "</li>";
                    echo "<li> <a href=./files/" . rawurlencode($file) . " class=\"button\">" . $file . "</a> </li>";


                }
            }
            closedir($handle);
        }
        echo "</ul>";
    ?>

    <p class="footer">I Like Trains.</p>
  </main>
</body>





  </body>
</html>
