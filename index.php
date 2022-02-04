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
        <input type="checkbox" name="checkbox_name" value="#1 Baylor">
        <button type="submit" name="submit">Submit</button>
      </form>
  </div>
  </div>
</section>

<?php
  include_once 'footer.php';
?>
