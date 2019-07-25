<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Currency Converter Processor</title>
  </head>
  <body style="background-color:powderblue;">
    <h3><a href="Home.php">Return Home</a></h3>
    <center>
    <h1>USD to British Pounds</h1>
    <?php
      $errors = 0;
      if (is_numeric($_POST['usd'])) {
        if (($_POST['usd']) >= 0) {
          $usd = round($_POST['usd'],2);
          $pounds=$usd*0.78;
          $pounds=round($pounds,2);
        }
        else {
          ++$errors;
          echo "<p>Error: 'USD' can't be less than 0</p>\n";
        }
      }
      else {
        ++$errors;
        echo "<p>Error: 'USD' must be a numeric value</p>\n";
      }
      if ($errors==0) {
        echo "<h2>$$usd in pounds is: £$pounds</h2>";
      }
    ?>
    <h2><a href="Currency.html">Calculate another conversion</a></h2>
    </center>
  </body>
</html>
