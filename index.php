<!--Splitting the header and footer into separate documents makes things easier!-->
<?php
  include_once 'header.php';
  include_once 'dbh.inc.php';
  include_once 'functions.inc.php';
?>

<section class="index-intro">
  <h1>Surviving March</h1>
  <p>Brought to you by the "Pockets Aint Empty Podcast"!</p>
</section>

<section class="index-categories">
  <h2>Make Your Selections</h2>
  <div class="index-categories-list">
    <div>
      <h3>Select Two Teams</h3>

      <?php

        session_start(); //Add this

        //Also you have to add your connection file before your query
        require('dbh.inc.php');

        // SQL query
        $strSQL = "SELECT userid, usersemail FROM users WHERE usersId = '".$_SESSION['usersId']."'";

        // Execute the query (the recordset $rs contains the result)
        $rs = mysqli_query($conn, $strSQL);

        // Loop the recordset $rs
        // Each row will be made into an array ($row) using mysqli_fetch_array
        while($row = mysqli_fetch_array($rs)) {

          // Write the value of the column FirstName (which is now in the array $row)
          echo $row['usersName'] . "<br />";
          echo $row['usersEmail'] . "<br />";

        }

        // Close the database connection
        mysqli_close($conn);


    }
    ?>

  </div>
  </div>
</section>

<?php
  include_once 'footer.php';
?>
