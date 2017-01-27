<?php
/**
 * Google Showtime grabber
 *
 * This file will grab the last showtimes of theatres nearby your zipcode.
 * Please make the URL your own! You can also add parameters to this URL:
 * &date=0|1|2|3 => today|1 day|2 days|etc..
 * &start=10 gets the second page etc...
 *
 * Please download the latest version of simple_html_dom.php on sourceForge:
 * http://sourceforge.net/projects/simplehtmldom/files/
 *
 * @author Bas van Dorst <info@basvandorst.nl>
 * @version 0.1
 * @package GoogleShowtime
 *
 * @modifyed by stephen byrne <gold.mine.labs@gmail.com>
 * @GoldMinelabs.com

 * Modified to generate an html table by Guillermo Morán <guillermo.moran@me.com>
 * February 28 2016
 * Original code found here: http://stackoverflow.com/questions/439857/is-there-a-movie-showtime-api
 */

require_once('simple_html_dom.php');


function generateMoviesTable() {

  $location = $_GET['location'];

  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, "http://www.google.com/movies?near=$location");
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10);
  $str = curl_exec($curl);
  curl_close($curl);

  $html = str_get_html($str);

  if (!isset($location)) {
      print "<h1>No Location Was Set.</h1>\n";
      return;
  }

  print "<h1>Showtimes for movie theatres near $location</h1>";
  print "<br>\n";

  //Print Header and footer for table
  print
      "<table id='example' class='display' cellspacing='5' width='100%'> \n".
            "<thead> <!-- Header -->\n".
                "<tr>\n".
                    "<th>Theater Name</th>\n".
                    "<th>Movie Title</th>\n".
                    "<th>Movie Start Time</th>\n".
                "</tr>\n".
            "</thead>\n".

            "<tfoot> <!-- Footer -->\n".
                "<tr>\n".
                    "<th>Theater Name</th>\n".
                    "<th>Movie Title</th>\n".
                    "<th>Movie Start Time</th>\n".
                "</tr>\n".
            "</tfoot>";


  //Print start of table body
  print "\n<tbody>\n";

  foreach($html->find('#movie_results .theater') as $div) {


      //Theater and Address Info
      $theaterName = $div->find('h2 a',0)->innertext."\n";

      //$theaterAddress = $div->find('.info',0)->innertext."\n";

      // print all the movies with showtimes
      foreach($div->find('.movie') as $movie) {
        //Movie names and times
        $movieTitle = $movie->find('.name a',0)->innertext.'<br />';
        $movieTimes = $movie->find('.times',0)->innertext.'<br />';

        //strip html tags and styling, except <br>
        $movieTimes = strip_tags($movieTimes);

        $movieTimesArray = split(" ", $movieTimes);

        /*
        print
            "<tr>\n".
            "    <td>$theaterName</td>\n".
            "    <td>$movieTitle</td>\n".
            "    <td>$movieTimes</td>\n".
            "</tr>\n";
        */

        //var_dump($movieTimesArray);

        foreach ($movieTimesArray as $startTime) {
          $startTime = str_replace("&nbsp", "", $startTime);


          print
              "<tr>\n".
              "    <td>$theaterName</td>\n".
              "    <td>$movieTitle</td>\n".
              "    <td>$startTime</td>\n".
              "</tr>\n";
        }


      }
      print "\n\n";

  }

  //Print close of table body
  print "\n</tbody>\n";
  print "\n</table>\n";
  // clean up memory
  $html->clear();
}

generateMoviesTable();

?>
