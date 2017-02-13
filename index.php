<?php
if (file_exists(__DIR__."/view/header.php")) {
  require(__DIR__."/view/header.php");
} else {
  echo "<div class='content'>";
  echo "file header not found!";
  echo "</div>";
}

if (file_exists(__DIR__.'/sqrimg/securimage.php')) {
  require_once (__DIR__.'/sqrimg/securimage.php');
} else {
  echo "WRONG PATH TO SECURIMAGE PHP";
};

if (file_exists(__DIR__."/view/home.php")) {
  require(__DIR__."/view/home.php");
} else {
  echo "<div class='content'>";
  echo "content page not found!";
  echo "</div>";
}


if (file_exists(__DIR__."/view/footer.php")) {
  require(__DIR__."/view/footer.php");
} else {
  echo "<div class='content'>";
  echo "file footer not found!";
  echo "</div>";
}

?>
