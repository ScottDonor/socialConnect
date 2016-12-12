<html>
<head>
<meta charset="UTF-8">
<title>Activation</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="style/style.css">
</head>
<body id="back" background="images/1.jpg">
<?php
include_once("templates/template_pageTop2.php");
$message = "";
$msg = preg_replace('#[^a-z 0-9.:_()]#i', '', $_GET['msg']);
if($msg == "activation_failure"){
	$message = '<h2>Activation Error</h2> Sorry there seems to have been an issue activating your account at this time. We have already notified ourselves of this issue and we will contact you via email when we have identified the issue.';
} else if($msg == "activation_success"){
	$message = '<h2>Activation Success</h2> Your account is now activated. <a href="login.php">Click here to log in</a>';
} else {
	$message = $msg;
}
?>
<div id="pageMiddle">
<br/>
<br/>
<?php echo $message; ?>
</div>

<?php include_once("templates/template_pageBottom.php"); ?>
</body>
</html>