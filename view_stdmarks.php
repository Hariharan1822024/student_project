<?php
	include"_config.php";
	session_start();
?>
<html>
	<head>
		<title> </title>
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
					<h3>View Mark</h3>
					<hr>
				<div class='col-12'>
					<table class="table table-bordered ">
					  <thead>
						<tr>
						  
						  <th scope="col">Name</th>
						  <th scope="col">standard</th>
						  <th scope="col">Tamil</th>
						  <th scope="col">English</th>
						  <th scope="col">Maths</th>
						  <th scope="col">Science</th>
						  <th scope="col">Social</th>
						  <th scope="col">Result</th>
						  
						</tr>
					  </thead>
					  <tbody>
					  <?php
						$sql="select * from tbl_marks m inner join tbl_students s on m.sid=s.sid where s.stn='{$_GET["id"]}'";
						$res=$con->query($sql);
						if($res->num_rows>0)
						{
							$i=0;
							while($row=$res->fetch_assoc())
							{
								$i++;
								echo"<tr>
										
										<td>{$row["Name"]}</td>
										<td>{$row["stn"]}</td>
										<td>{$row["tamil"]}</td>
										<td>{$row["english"]}</td>
										<td>{$row["maths"]}</td>
										<td>{$row["science"]}</td>
										<td>{$row["social"]}</td>
										<td>{$row["result"]}</td>
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