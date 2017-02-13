<?php
if (file_exists(__DIR__."/header.php")) {
  require(__DIR__."/header.php");
} else {
  echo "<div class='content'>";
  echo "file header not found!";
  echo "</div>";
}
// MESSAGE BELOW
echo "<div class='content'>";
echo "<h1>Wrong capthca code!</h1>";
echo "</div>";
if (file_exists(__DIR__."/footer.php")) {
  require(__DIR__."/footer.php");
} else {
  echo "<div class='content'>";
  echo "file footer not found!";
  echo "</div>";
}

$redirect = '/';
echo "<center><font face=\"tahoma\">Click <a href=\"$redirect\">here</a> if your browser does not automatically redirect you</font></center>";
?>
<SCRIPT LANGUAGE="JavaScript">
redirTime = "2550";
redirURL = "<?php echo $redirect ?>";
function redirTimer() {
self.setTimeout("self.location.href = redirURL;",redirTime);}
</script>
<BODY onLoad="redirTimer()">
