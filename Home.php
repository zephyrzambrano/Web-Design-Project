<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <?php
      echo "<h3>Today's date is: ";
      $today = date("m/d/Y</h3>");
      echo $today;
    ?>
  </head>

  <body style="background-color:powderblue;">
    <center>
    <h1>About Myself</h1>
    <p>My name is Zephyr Zambrano. I am currently a junior at Rutgers majoring in Information Technology and Informatics, and I am doing
      the specialization in Game Production and Innovation. I am minoring in music. On my website, you will find links to
      various activities and information.</p>

	<table border="1">
    <thead>I am taking the following courses this semester:</thead>
    <th><i>Programming Courses</i></th><th><i>Other Courses</i></th>
		<tr>
			<td>Web Design</td>
			<td>Management of Technological Organizations</td>
		</tr>
		<tr>
			<td>Object-Oriented Programming</td>
			<td>Research in Disciplines</td>
		<tr>
      <td>Game Design</td>
      <td>Intro to Music Analysis</td>
    </tr>
	</table>

    <hr>

    <h1>Useful Information</h1>
    <p><a href="WebTech.html">Recent Developments in Web Technology</a></p>
    <p><a href="AboutMySQL.html">About MySQL</a></p>

    <hr>

    <h1>Other Information and Activities</h1>
    <h3>(Click an image to get started!)</h3>

    <h2>Toss a coin 100 times!</h2>
    <p>
      <a href="CoinToss100.html">
      <img src="Coin.jpg" alt="Coins" width="100" height="100" border="0">
      </a>
    </p>

    <h2>Flip a coin once!</h2>
    <p>
      <a href="CoinToss.php">
      <img src="Coin.jpg" alt="Coins" width="100" height="100" border="0">
      </a>
    </p>

    <h2>Time Until Christmas</h2>
    <p>
      <a href="Holiday.html">
      <img src="Christmas.jpg" alt="Christmas" width="100" height="100" border="0">
      </a>
    </p>

    <h2>Places I'd Like to Visit</h2>
    <p>
      <a href="Places.html">
      <img src="Plane.jpg" alt="Plane" width="100" height="100" border="0">
      </a>
    </p>

    <h2>Currency Converter</h2>
    <p>
      <a href="Currency.html">
      <img src="Currency.jpg" alt="Currency" width="100" height="100" border="0">
      </a>
    </p>

    <h2>My Favorite Websites</h2>
    <p>
      <a href="FavoriteWebsites.html">
      <img src="Browser.jpg" alt="Browser" width="100" height="100" border="0">
      </a>
    </p>

    </center>

  </body>
</html>
