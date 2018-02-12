<?php include("data.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo $config->title_app ?></title>
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
  <script src="js/dom.js"></script>
  <script src="js/ajax.js"></script>
  <script src="js/app.js"></script>
  <script src="js/burger.js" charset="utf-8"></script>
</head>
<body>
  <header id="grid_header">
    <div id="burger">
      <h2 class="title"><i id="btnBurger" class="clickable fa fa-bars fa-lg"></i></h2>
          <ul id="listeBurger">
            <li>Accueil</li>
            <li>Accueil</li>
            <li>Accueil</li>
            <li>Accueil</li>
          </ul>
    </div>
    <h2 class="title"><span><?php echo $config->title_app ?></span></h2>


  </header>
  <nav id="grid_nav">
    <ul class="list">
      <li class="item">
        <a class="link" href="index.php">home</a>
      </li>
      <li class="item">
        <a class="link" href="synchrone.php">page sync</a>
      </li>
    </ul>
  </nav>
