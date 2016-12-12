<?php
include_once("php_includes/config.php");
include_once("languages/".$site_language.".php");
?>
<div id="pageBottom">&copy;<?php echo date('Y');?> <?php echo $site_name; ?> - <?php echo $site_author; ?><br/>
<?php
	$sql="select * from users ORDER BY RAND() limit 100";
	$result = mysqli_query($db_conx, $sql);
	$row_cnt = $result->num_rows;
	$result->close();
?>
<?php echo $row_cnt; ?> <?php echo $site_registered_members; ?>
</div>