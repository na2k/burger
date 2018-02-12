<?php
include("inc/head.php");
// debug(getUsers());
?>

<div id="app">
  <h1 class="title"><?php echo $config->title_sync ?></h1>
  <p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  </p>
  <ul class="list persos">
    <?php
      foreach(getUsers() as $key => $persos){
        // debug($key);
        // debug($persos);
        echo "<li class=\"perso\">
        <span>$persos->name</span>
        <span>$persos->genre</span>
        </li>";
      }
     ?>
  </ul>
</div>

<?php include("inc/footer.php"); ?>
