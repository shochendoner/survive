<?php

if (isset($_POST["submit"])) {

  // First we get the form data from the URL
  $pickOne = $_POST["pickOne"];
  $pickTwo = $_POST["pickTwo"];
  $username = $_POST["uid"];
 

  // Then we run a bunch of error handlers to catch any user mistakes we can (you can add more than I did)
  // These functions can be found in functions.inc.php

  require_once "dbh.inc.php";
  require_once 'functions.inc.php';

  // Left two picks empty
  // We set the functions "!== false" since "=== true" has a risk of giving us the wrong outcome
  if (emptyInputSignup($pickOne, $pickTwo) !== false) {
    header("location: ../signup.php?error=emptyinput");
		exit();
  }
  // If we get to here, it means there are no user errors

  // Now we insert the user into the database
  makePicks($pickOne, $pickTwo);

} else {
	header("location: ../signup.php");
    exit();
}
