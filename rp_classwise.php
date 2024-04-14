<?php
	include"_config.php";
	session_start();
?>

<html>
	<head>
		<title> </title>
	</head>
<?php
	include"navbar.php";
?>	
	
<body>

<div class='container-fluid'>
	<div class='row'>
		<div class='col-md-2'>
			<?php include"sidebar.php"?>
		</div>
			<div class='col-8 mt-5 ml-5'>
				<h3>View Marks</h3>
				<hr>
				<div class='col-12'>
					<table class="table table-borderd">
						<thead>
							<tr>
								<th scope="col">Sno</th>
								<th scope="col">Standard</th>
								<th scope="col">view</th>
							</tr>
						</thead>
						
						<tbody>
							<tr>
								<td>1</td>
								<td>6</td>
								<td><a href='view_stdmarks.php?id=6'><input type='submit' value='view' class="btn btn-success">
								<?php
									$sql="select * from tbl_students where stn=6";
									$res=$con->query($sql);
									$row=$res->fetch_assoc();
								?>
								</a></td>
							</tr>
							<tr>
								<td>2</td>
								<td>7</td>
								<td><a href='view_stdmarks.php?id=7'><input type='submit' value='view' class="btn btn-success"></a></td>
								<?php
									$sql="select * from tbl_students where stn=7";
									$res=$con->query($sql);
									$row=$res->fetch_assoc();
								?>
							</tr>
							<tr>
								<td>3</td>
								<td>8</td>
								<td><a href='view_stdmarks.php?id=8'><input type='submit' value='view' class="btn btn-success"></a></td>
								<?php
									$sql="select * from tbl_students where stn=7";
									$res=$con->query($sql);
									$row=$res->fetch_assoc();
								?>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			
	<div>
<div>
	


</body>
</html>