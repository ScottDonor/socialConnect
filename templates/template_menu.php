<?php

include_once("php_includes/check_login_status.php");

// Collect notification count
$notificationsthere="";
$sql = "SELECT * FROM notifications WHERE username LIKE BINARY '$log_username' ORDER BY date_time DESC";
$query = mysqli_query($db_conx, $sql);
$numrows = mysqli_num_rows($query);

$sql2 = "SELECT * FROM friends WHERE user2='$log_username' AND accepted='0' ORDER BY datemade ASC";
$query2 = mysqli_query($db_conx, $sql2);
$numrows2 = mysqli_num_rows($query2);

if($numrows < 1||$numrows2 < 1){
	$notificationsthere="Notifications (".($numrows + $numrows2).")";
} else {
	$notificationsthere = "Notifications";
}
?> 

          <a href="index.php">Home</a>
		  
          <a href="notifications.php"><?php echo $notificationsthere; ?></a>
		  
		  <a href="user.php?u=<?php echo $log_username; ?>">Profile</a>