<?php
	include"_config.php";
	session_start();
	$sql="select * from tbl_students";
	$con->query($sql);
?>
<html>
	<head>
		<title></title>
	</head>
<?php
	include"navbar.php"
?>
<body>
	<div class='container-fluid'>
			<div class='row'>
				<div class='col-md-3'>
					<?php include"sidebar.php"; ?>
				</div>
				<div class='col-8 mt-5'>
					<h3>View All students</h3>
					<hr>
				<div class='col-12'>
					<table class="table table-bordered ">
					  <thead>
						
					  <tbody>
					  <?php
						$sql="select * from tbl_students";
						$res=$con->query($sql);
						
					  ?>
					  </tbody>
					</table>
						

				</div>
				</div>
			</div>

	</div>
	
	
</body>

</html>
