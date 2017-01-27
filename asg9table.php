<?php

include('../adodb519/adodb5/adodb.inc.php');

if (isset($_GET['myAustin'])) {
    $tableName = $_GET['myAustin'];


    generateTable($tableName);

}

function generateTable($tableName) {

    // Open a connection to the database
    //
    $db = ADONewConnection('mysql'); // Create a connection handle to the local database
    $db->PConnect('localhost',  // Host to connect to
        '',     // Database user name
        '',              // Password
        '');   // Database

        // Format and execute a SQL statement
        //
    $sql = "select * from $tableName";
    $rs = $db->Execute($sql);

    $dbLocation = "";
    $dbMapLink = "";
    $rowName = "";

    if ($tableName == "activities") {
        $rowName = "activity";
    }
    if ($tableName == "restaurants") {
        $rowName = "restaurant";
    }
    if ($tableName == "theatres") {
        $rowName = "theatre";
    }

    // Make sure we have results
    //
    if ($rs == false) {
        print_r($rs);
        print "<br>SQL select failed \n";
    }

    else {

        //Print table headers
        print
            "<table class='table table-bordered'>\n".
            "    <thead>\n".
            "        <tr>\n".
            "           <th>Venue Name</th>\n".
            "           <th>Google Maps</th>\n".
            "        </tr>\n".
            "    </thead>\n".
            "    <tbody>\n";


        // While rows are returned, store the values in local variables
        //
        while (!$rs->EOF) {
            $dbLocation   =  $rs->fields[$rowName];
            $dbMapLink    =  $rs->fields["link"];

            //Print Options
            print "<tr>\n";
            print "   <td>$dbLocation</td>\n";
            print "   <td><a href='$dbMapLink'>See Map</a></td>\n";
            print "</tr>\n";

            $rs->MoveNext();
        }

        print
            "       </tbody>\n".
            "   </table>\n".
            "</div>\n";
    }
}

?>
