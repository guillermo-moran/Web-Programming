<?php

include('../adodb519/adodb5/adodb.inc.php');


function printSelection($name, $shirtColor, $size) {
    print
      "<h3> Hello, $name </h3> <br> \n".
      "<h4> You ordered a $shirtColor shirt in $size </h4>\n";
}

function generateForms() {

    // Print start of form
    print "<form action='final.php' method='post'>\n";

    // print text field with a new row and column
    print
    "<div class='row'>\n".
    "  <div class='col-sm-6 col-sm-offset-3'>\n".
    "    <input class='form-control' required name='name' maxlength='20' placeholder='Enter your name'></input>\n".
    "    <br>\n".
    "  </div>\n".
    "</div>\n";

    // Print start of row
    print "  <div class='row'>\n";

    // Open a connection to the database
    //
    $db = ADONewConnection('mysql'); // Create a connection handle to the local database
    $db->PConnect('localhost',  // Host to connect to
        '',     // Database user name
        '',              // Password
        '');   // Database

    /*
     *
     * *** SELECT Colors FOR FIRST TABLE ***
     *
     */

    $sql = "select colorDesc from shirtColors";
    $rs = $db->Execute($sql);

    $dbColor = "";

    // Make sure we have results
    //
    if ($rs == false) {
        print_r($rs);
        print "<br>SQL select failed \n";
    }

    else {

      // Print column and start of class
      print
        "    <div class='col-sm-4 col-sm-offset-2'>\n".
        "    <h5> Shirt Color </h5>\n".
        "      <div class='form-group'>\n".
        "        <select class='form-control' name='color'>\n";

        // While rows are returned, store the values in local variables
        //
        while (!$rs->EOF) {
            $dbColor = $rs->fields["colorDesc"];
            print "<option value='$dbColor'> $dbColor </option>\n";
            $rs->MoveNext();
        }

        print
          "        </select>\n".
          "        <br>\n".
          "      </div>\n".
          "    </div>\n";
    }

    /*
     *
     * *** SELECT Shirt Size FOR SECOND TABLE ***
     *
     */

     $sql = "select sizeDesc from shirtSizes";
     $rs = $db->Execute($sql);

     $dbShirtSize = "";

     // Make sure we have results
     //
     if ($rs == false) {
         print_r($rs);
         print "<br>SQL select failed \n";
     }

     else {

       // Print column and start of class
       print
         "    <div class='col-sm-4'>\n".
         "      <div class='form-group'>\n".
         "      <h5> Shirt Size </h5>\n".
         "        <select class='form-control' name='size'>\n";

         // While rows are returned, store the values in local variables
         //
         while (!$rs->EOF) {
             $dbShirtSize = $rs->fields["sizeDesc"];
             print "<option value='$dbShirtSize'> $dbShirtSize </option>\n";
             $rs->MoveNext();
         }

         print
           "        </select>\n".
           "        <br>\n".
           "      </div>\n".
           "    </div>\n";
     }

     // Close row
     print "  </div>\n";

     // Print submit button
     print
      "  <div class='row text-center'>\n".
      "    <button type='submit' class='btn btn-primary'>Order Shirt</button>\n".
      "  </div>\n";

      // Print end of form
      print "</form>\n";
}

?>
