<?php
	include"_config.php";
	session_start();
	if(isset($_POST["submit"]))
	{
		$sid=$_GET["sid"];  
		
		$tamil=$_POST["tamil"];
		$english=$_POST["english"];
		$maths=$_POST["maths"];
		$science=$_POST["science"];
		$social=$_POST["social"];
		$total=$_POST["total"];
		$result=$_POST["result"];
	
		$sql="insert into tbl_marks (sid,tamil,english,maths,science,social,total,result) values ('{$sid}','{$tamil}','{$english}','{$maths}','{$science}','{$social}','{$total}','{$result}')";
		if($con->query($sql))
		{
			flash("msg","Student has be added");
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
					<h3>Add students</h3>
					<hr>
				<div class='col-12'>
				<?php flash("msg");?>
						<div class='col-md-12 mt-5'>
							<form method='post' >
								
								<div class='row'>
									<div class='col-md-4'>
										<div class=' form-group '>
											<label>Name</label>
											<input type='text' name='Name' value='<?php echo $row["Name"]; ?>' class='form-control' required>
										</div>
									</div>
									<div class='col-md-4'>
										<div class=' form-group '>
											<label>RollNo</label>
											<input type='text' name='Roll' value='<?php echo $row["Roll"]; ?>' class='form-control' required>
										</div>
									</div>
									<div class='col-md-4'>	
										<div class=' form-group '>
											<label>Mobile</label>
											<input type='text' name='Mobile' value='<?php echo $row["Mobile"]; ?>' class='form-control' required>
										</div>
									</div>
								</div>	
								
								
								<div class='row'>
									<div class='col-md-4'>
										<div class='form-group'>
											<label>Tamil</label>
											<input type='text' class='form-control' name='tamil' id='tamil'  onkeyup='add()' onkeypress='ok(this,event)' required>
										</div>
									</div>
									<div class='col-md-4'>
										<div class='form-group'>
											<label>English</label>
											<input type='text' class='form-control' name='english' id='english'  onkeyup='add()' onkeypress='ok(this,event)' required>
										</div>
									</div>
									<div class='col-md-4'>
										<div class='form-group'>
											<label>Maths</label>
											<input type='text' class='form-control' name='maths' id='maths'  onkeyup='add()' onkeypress='ok(this,event)' required>
										</div>
									</div>
								</div>
								
								<div class='row'>
									<div class='col-md-4'>
										<div class='form-group'>
											<label>Science</label>
											<input type='text' class='form-control' name='science' id='science'  onkeyup='add()' onkeypress='ok(this,event)' required>
										</div>
									</div>
									<div class='col-md-4'>
										<div class='form-group'>
											<label>social</label>
											<input type='text' class='form-control' name='social' id='social'  onkeyup='add()' onkeypress='ok(this,event)' required>
										</div>
									</div>
								</div>
								
								<div class='row'>
									<div class='col-md-4'> 
										<div class='form-group'>
											<label>Total Marks</label>
											<input type='text' class='form-control' name='total' id='total'  readonly>
										</div>
									</div>
									<div class='col-md-4'>
										<div class='form-group'>
											<label>Result</label>
											<input type='text' class='form-control' name='result' id='result' readonly>
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
	
	<script>
	function add()
	{
		var a=Number(document.getElementById("tamil").value);
		var b=Number(document.getElementById("english").value);
		var c=Number(document.getElementById("maths").value);
		var d=Number(document.getElementById("science").value);
		var e=Number(document.getElementById("social").value);
		var rs=document.getElementById("result");
		var z=a+b+c+d+e;
		document.getElementById("total").value=z;
		
			
			if(a>=40 && b>=40 && c>=40 && d>=40 && e>=40)
			{
				rs.value='pass';	
			}
			else
			{
				rs.value='fail';
			}
	}
		
		function ok(ele,e)
		{
		var k=e.keyCode;
		var n=Number(ele.value+e.key); 
		if(k>=48 && k<=57 && n<=100)  
		{
			
		}
		else
		{
		e.preventDefault();
		}

		}
	
	
	</script>
	
	<?php include"footer.php" ?>
</body>

</html>
