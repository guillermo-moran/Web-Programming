//=================================================================
// myValidate()
// Validates whether name, phone and email addresses exist
// Also does basic regex checks against the phone and email
//=================================================================
function myValidate() {

    // Clear the message area
    document.getElementById("msg").innerHTML = "";

    // Has the user typed in a name?
    var name = document.getElementById('myName').value;
    if (name == null || name == '') {
        document.getElementById("msg").innerHTML = "ERROR: You must enter a name.";
        return;
    }

    // Test that the password contains:
    // -  Alpha or numeric characters
    // -  Exactly 8 characters
    // -  No punctuation
    var password = document.getElementById('myPassword').value;
    var patt = new RegExp("^[A-Za-z0-9]{8}$");
    ret = patt.test(password);
    if (ret == false) {
      document.getElementById("msg").innerHTML = "ERROR: Password can only contain alpha or numeric characters, and must be 8 characters long.";
      return;
    }

    // Has the user typed in a phone number?
    var phone = document.getElementById('myPhone').value;
    if (phone == null || phone == '') {
        document.getElementById("msg").innerHTML = "ERROR: You must enter a phone number.";
        return;
    }

    // Simple regex validation of the phone number
    // Handles formats as follows: (555) 555-5555 and 555-555-5555
    patt = new RegExp("^(\\()?\\d{3}(\\))?(-|\\s)?\\d{3}(-|\\s)\\d{4}$");
    ret = patt.test(phone);
    if (ret == false) {
        document.getElementById("msg").innerHTML = "ERROR: Must be (555) 555-5555 or 555-555-5555";
        return;
    }

    // Does the email address exist?
    var email = document.getElementById('myEmail').value;
    if (email == null || email == '') {
        document.getElementById("msg").innerHTML = "ERROR: You must enter an email address.";
        return;
    }

    // Very simple and will not catch everything, but will catch most
    // Checks for text, an @ sign and more text
    patt = new RegExp("^\\S+@\\S+$");
    ret = patt.test(email);
    if (ret == false) {
        document.getElementById("msg").innerHTML = "ERROR: Invalid email address";
        return;
    }

    // If everything checks out
    document.getElementById("msg").innerHTML = "All Good!";

}
