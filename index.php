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
  </div>
    <div>
      <form action="includes/makepics.inc.php" method="post">
      <?php
      $choices = array()
      $query = mysqli_query("SELECT field1, field2 FROM ...");
      if (mysql_num_rows($query))
      {
      while ($row = mysqli_fetch_array($query))
        {
          $choices[$row['field1']] = $row['field2'];
        }
      }
      ?>
  </div>
  </div>
</section>

<?php
  include_once 'footer.php';
?>
