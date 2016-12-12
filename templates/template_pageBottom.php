<div id="pageBottom">&copy;<?php echo date('Y');?> Social Connect Made By RAHUL MEHRA<br/>
<?php
	$sql="select * from users ORDER BY RAND() limit 100";
	$result = mysqli_query($db_conx, $sql);
	$row_cnt = $result->num_rows;
	$result->close();
?>
<?php echo $row_cnt; ?> Registered Members!
</div>