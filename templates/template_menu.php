<?php
include_once("php_includes/check_login_status.php");
include_once("php_includes/config.php");
include_once("languages/".$site_language.".php");
// Collect notification count
$notificationsthere="";
$sql = "SELECT * FROM notifications WHERE username LIKE BINARY '$log_username' ORDER BY date_time DESC";
$query = mysqli_query($db_conx, $sql);
$numrows = mysqli_num_rows($query);

$sql2 = "SELECT * FROM friends WHERE user2='$log_username' AND accepted='0' ORDER BY datemade ASC";
$query2 = mysqli_query($db_conx, $sql2);
$numrows2 = mysqli_num_rows($query2);
$notificationsthere = "".$menu2." (".($numrows + $numrows2).")";
?> 
<!-- menu for logged in members -->
<a href="index.php"><?php echo $menu1; ?></a>
<a href="notifications.php"><?php echo $notificationsthere; ?></a>
<a href="user.php?u=<?php echo $log_username; ?>"><?php echo $menu3; ?></a>