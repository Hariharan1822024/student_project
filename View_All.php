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
				<div class='col-md-2'>
					<?php include"sidebar.php"; ?>
				</div>
				<div class='col-8 mt-5 ml-5'>
					<h3>View All students</h3>
					<hr>
				<div class='col-12'>
					<table class="table table-bordered ">
					  <thead>
						<tr>
						  <th scope="col">Sno</th>
						  <th scope="col">Name</th>
						  <th scope="col">Roll</th>
						  <th scope="col">Mobile</th>
						  <th scope="col">Edit</th>
						  <th scope="col">Delete</th>
						  <th scope="col">Add student</th>
						</tr>
					  </thead>
					  <tbody>
					  <?php
						$sql="select * from tbl_students";
						$res=$con->query($sql);
						if($res->num_rows>0)
						{
							$i=0;
							while($row=$res->fetch_assoc())
							{
								$i++;
								echo"<tr>
										<td>{$i}</td>
										<td>{$row["Name"]}</td>
										<td>{$row["Roll"]}</td>
										<td>{$row["Mobile"]}</td>
										
										<td><a href='Edit.php?sid={$row["sid"]}' class='btn btn-info'> Edit </a></td>
										
										<td><a href='delete.php?sid={$row["sid"]}' class='btn btn-danger'> Delete </a></td>
																	  
										<td><a href='add_row.php?sid={$row["sid"]}'<input type='submit' class='btn btn-success'> Add marks </a> </td>
									 </tr>";
							}
						}
					  
					  ?>
						
						
					  </tbody>
					</table>
						

				</div>
				</div>
			</div>

	</div>
	
	
</body>

</html>
