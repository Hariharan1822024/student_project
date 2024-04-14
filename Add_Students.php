
<?php
	include"_config.php";
	session_start();
	if(isset($_POST["submit"]))
	{	
		$Name    = mysqli_real_escape_string($con,$_POST["Name"]);
		$RollNo	 = $_POST["Roll"];
		$Mobile  = $_POST["Mobile"];
		$stn	 = $_POST["stn"];
		$section = $_POST["section"];
		$address = $_POST["address"];
		
		$sql="insert into tbl_students (Name,Roll,Mobile,stn,section,address) values ('{$Name}','{$RollNo}','{$Mobile}','{$stn}','{$section}','{$address}')";
		if($con->query($sql))
		{
			flash("msg","Student details Added");
		}
		else
		{
			flash("msg","student details not Added");
		}
	
	}
?>

<html>
	<head>
		<title>
		</title>
		<?php include"header.php";?>
	</head>

<?php
	include"navbar.php";
?>
<body>
		<div class='container-fluid'>
			<div class='row'>
				<div class='col-md-2'>
					<?php include"sidebar.php"; ?>
				</div>
				
				<div class='col-md-9 mt-5 ml-5' style='padding-left:-600px;'>
					<h3>Add Sutdent</h3><hr>
					<form method='post' >
						<?php flash("msg");?>
						<div class='row'>
							<div class='col-md-6'>
								<div class=' form-group '>
									<label>Name</label>
									<input type='text' name='Name' class='form-control' required>
								</div>
							</div>
							<div class='col-md-6'>
								<div class=' form-group '>
									<label>RollNo</label>
									<input type='text' name='Roll' class='form-control' required>
								</div>
							</div>
						</div>
						<div class='row'>
							<div class='col-md-6'>	
								<div class=' form-group '>
									<label>Mobile</label>
									<input type='text' name='Mobile' class='form-control' onkeypress='ok(this,event)' required>
								</div>
							</div>
							<div class='col-md-6'>
								<div class=' form-group '>
									<label>Stn</label>
									<select class='form-control' name='stn' required>
										<option>Select Stn</option>
										<option>6</option>
										<option>7</option>
										<option>8</option>
									</select>
								</div>
							</div>
						</div>
						<div class='row'>
							<div class='col-md-6'>
								<div class='form-group'>
									<label>Section</label>
									<select class='form-control' name='section' required>
										<option>Select Stn</option>
										<option>A</option>
										<option>B</option>
										<option>C</option>
									</select>
								</div>
							</div>
							<div class='col-md-6'>
								<div class='form-group'>
									<label>Address</label>
									<textarea class='form-control' name='address'> </textarea>
								</div>	
							</div>	
						</div>
							
						<input type='submit' name='submit' value='submit' class='btn btn-info mt-3'>
							
					</form>
				</div>
			</div>
		</div>
		
	<script>
	
	function ok(ele,e)
		{
		var k=e.keyCode;
		var n=Number(ele.value+e.key); 
		if(k>=48 && k<=57 && n<=12345678910)  
		{
			
		}
		else
		{
		e.preventDefault();
		}

		}
	
	</script>
</body>
</html>
