<!doctype html>
<html lang="en">
<body>
<?php
/* Use PHP to get user IP */
$ipadd = $_SERVER[REMOTE_ADDR];
?>
<p>Your IP Address: <?php echo $ipadd ?></p>
<br>
<a HREF="previous.html" onClick="history.back();return false;"><img src="http://ngivney.comyr.com/ATPS/img/back.gif" style="border: 0px;"></a>
</body>
</html>
