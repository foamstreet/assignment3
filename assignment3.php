<?php
  function __autoload($class) {
    require_once $class . '.php';
  }
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Assignment 3</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="stylesheet" href="assignment3.css">
</head>
<body>
  <div class="container">
    <div class="coffee-img"></div>
    <?php
      $light = new Coffee("light", 70, 1.90);
      $med = new Coffee("medium", 100, 1.50);
      $dark = new Coffee("dark", 125, 1.75);
      $french = new Cappuccino("french", 45, 3, "high", "heart");
      $italian = new Cappuccino("italian", 100, 3.25, "medium", "leaf");
      $espresso = new Cappuccino("espresso", 25, 3.50, "low", "swan");

      $drinks = array($light, $med, $dark, $french, $italian, $espresso);

      foreach($drinks as $d)
      {
        echo "<div class=\"coffee-block\">";
        echo $d;
        if(get_class($d) === "Cappuccino")
        {
          echo "My foam art is " . $d->getArt() . "<br>";
        }
        else
        {
          echo $d->iced() . "<br>";
        }
        echo $d->buzz();
        echo "</div>";
      }
    ?>
  </div>
</body>
</html>
