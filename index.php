<!--Splitting the header and footer into separate documents makes things easier!-->
<?php
  include_once 'header.php';
?>

<section class="index-intro">
  <h1>Surviving March</h1>
  <p>Brought to you by the "Pockets Aint Empty Podcast"!</p>
</section>

<section class="index-categories">
  <h2>Some Basic Categories</h2>
  <div class="index-categories-list">
    <div>
      <h3>Fun Stuff
      <?php

      $request = new HttpRequest();
      $request->setUrl('https://api-basketball.p.rapidapi.com/games');
      $request->setMethod(HTTP_METH_GET);

      $request->setQueryData([
        'timezone' => 'America/New_York',
        'season' => '2021-2022',
        'league' => '116'
      ]);

      $request->setHeaders([
        'x-rapidapi-host' => 'api-basketball.p.rapidapi.com',
        'x-rapidapi-key' => '0346387995msh2c1248af75d544ep175845jsn782b1a09581f'
      ]);

      try {
        $response = $request->send();

        echo $response->getBody();
      } catch (HttpException $ex) {
        echo $ex;
      }
}
?>
</h3>
    </div>
    <div>
      <h3>Serious Stuff</h3>
    </div>
    <div>
      <h3>Exciting Stuff</h3>
    </div>
    <div>
      <h3>Boring Stuff</h3>
    </div>
  </div>
</section>

<?php
  include_once 'footer.php';
?>
