<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Coin Toss Game</title>
  </head>
  <body style="background-color:powderblue;">
    <h3><a href="Home.php">Return Home</a></h3>
    <center>
    <?php
      $coin=mt_rand(0,1);
      if ($coin=="1") {
        echo '<h1>Heads</h1>';
        echo '<img src="Heads.jpg" alt="Heads">';
      }
      else {
        echo '<h1>Tails</h1>';
        echo '<img src="Tails.jpg" alt="Tails">';
      }
    ?>
    <h2><a href="CoinToss.php">Flip Again!</a></h2>
    </center>
  </body>
</html>
