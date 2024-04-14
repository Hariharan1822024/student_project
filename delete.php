<?php
	include"_config.php";
	session_start();
?>

<?php
	
	$sql="delete from tbl_students where sid='{$_GET["sid"]}'";
	$con->query($sql);
	echo"<h1>Deleted Successfully</h1>";
	header("location:view_All.php");
?>
