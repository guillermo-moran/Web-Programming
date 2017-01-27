//=================================================================
// showTable()
// Validates whether name, phone and email addresses exist
// Also does basic regex checks against the phone and email
//=================================================================

$(document).ready(function() {

  //hide elements first
  $("#content").hide();

});

function showTable() {

    // Set the area where items are displayed to null
    //
    $("#content").slideUp(600);
    document.getElementById('myAustin').innerHTML = '';

    // Create an XMLHttpRequest object.  This is used for ajax
    var xhttp;
    xhttp = new XMLHttpRequest();


    // Get a handle to the 'choices' listbox
    var e = document.getElementById('choices');
    // name value pair for the option selected
    var item = e.options[e.selectedIndex].value;

    // Store a function to be called automatically each
    // time the readyState property changes
    // 4: request finished and response is ready
    // 200: Status is 'OK'
    // This will handle the response back from the PHP code
    xhttp.onreadystatechange = function() {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById('myAustin').innerHTML = xhttp.responseText;
            document.getElementById('returnText').innerHTML = "Found these " + item + " for you.";
            $("#content").slideDown(1000);

        }
    };



    // Fetch the option selected and build a URL to call with GET

    var urlStr = 'asg9table.php?myAustin=';
    urlStr = urlStr.concat(item);

    // Using Ajax, post the GET request
    xhttp.open('GET', urlStr, true);
    xhttp.send();

}
