<?php
if(file_exists(__DIR__."/controller/contactUs.php")) {
  require("./controller/contactUs.php");
} else {
  echo "contactUs script is missing!";
};
?>
