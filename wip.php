// Make Pics Form 

// <div> //
      <form action="includes/makepics.inc.php" method="post">
        <input type="checkbox" name="checkbox_name" value="#1 Baylor">
        <button type="submit" name="submit">Submit</button>
      </form>
  </div>

  // Insert picks into database --STILL FIXING 
function makePicks($pick1, $pick2) {
	$sql = "INSERT INTO users (pickOne, pickTwo) VALUES (?, ?);";
	
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
	 	header("location: ../signup.php?error=stmtfailed");
		exit();
	}

	$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

	mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
	header("location: ../signup.php?error=none");
	exit();
}


