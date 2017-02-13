<?php
if (file_exists(__DIR__."/view/header.php")) {
  require(__DIR__."/view/header.php");
} else {
  echo "<div class='content'>";
  echo "file header not found!";
  echo "</div>";
}
if (file_exists(__DIR__."/view/404.php")) {
  require(__DIR__."/view/404.php");
} else {
  echo "<div class='content'>";
  echo "content page not found!";
  echo "</div>";
}


if (file_exists(__DIR__."./view/footer.php")) {
  require(__DIR__."/view/footer.php");
} else {
  echo "<div class='content'>";
  echo "file footer not found!";
  echo "</div>";
}

?>
