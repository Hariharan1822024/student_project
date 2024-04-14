<?php
	include"_config.php";
	session_start();
	if(isset($_POST["submit"]))
	{
		$Name=$_POST["Name"];
		$Roll=$_POST["Roll"];
		$Mobile=$_POST["Mobile"];
		$stn= $_POST["stn"];
		$section=$_POST["section"];
		$address=$_POST["address"];
		$sql="update tbl_students set Name='{$Name}',Roll='{$Roll}',Mobile='{$Mobile}',stn='{$stn}',section='{$section}',address='{$address}' where sid='{$_GET["sid"]}'";
		if($con->query($sql))
		{
			flash("msg","Data has been Altered");
		}
		else
		{
			flash("msg","Invalid Record ");
		}
	}
	$sql="select * from tbl_students where sid={$_GET["sid"]}";
	$res=$con->query($sql);
	$row=$res->fetch_assoc();
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
				<?php flash("msg");?>
						<div class='col-md-9 mt-5'>
							<form method='post' >
								
								<div class='row'>
									<div class='col-md-6'>
										<div class=' form-group '>
											<label>Name</label>
											<input type='text' name='Name' value='<?php echo $row["Name"]; ?>' class='form-control' required>
										</div>
									</div>
									<div class='col-md-6'>
										<div class=' form-group '>
											<label>RollNo</label>
											<input type='text' name='Roll' value='<?php echo $row["Roll"]; ?>' class='form-control' required>
										</div>
									</div>
								</div>
								<div class='row'>
									<div class='col-md-6'>	
										<div class=' form-group '>
											<label>Mobile</label>
											<input type='text' name='Mobile' value='<?php echo $row["Mobile"]; ?>' class='form-control' required>
										</div>
									</div>
									<div class='col-md-6'>
										<div class=' form-group '>
											<label>stn</label>
											<select class='form-control' name='stn' required><?php echo $row["stn"]; ?> 
											<?php
											$sql="select * from tbl_students where sid={$_GET["sid"]}";
											$res=$con->query($sql);
											if($res->num_rows>0)
											{
												echo"<option>{$row["stn"]}</option>
													<option>6</option>
													<option>7</option>
													<option>8</option>"; 
												
											}	
											?>
											</select>
										</div>
									</div>
								</div>
							<div class='row'>
								<div class='col-md-6'>
									<div class=' form-group '>
										<label>Section</label>
										<select class='form-control' name='section' required><?php echo $row["section"];?>
							
										<?php
										$sql="select * from tbl_students where sid={$_GET["sid"]}";
										$res=$con->query($sql);
											if($res->num_rows>0)
											{
												echo"<option>{$row["section"]}</option>
													<option>a</option>;   
													<option>b</option>;   
													<option>c</option>";   
											}
										?>
										</select>
									</div>
								</div>
								<div class='col-md-6'>
									<div class=' form-group '>
										<div class='form-group'>
											<label>Address</label>
										<textarea class='form-control' name='address' ><?php echo $row["address"]; ?> </textarea>
										</div>	
									</div>
								</div>
							</div>
									
								<input type='submit' name='submit' value='submit' class='btn btn-info mt-3'>
									
							</form>
						</div>
				</div>
				</div>
			</div>
	</div>
</body>

</html>
