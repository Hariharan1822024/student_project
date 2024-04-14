<?php
	include"_config.php";
	session_start();
	if(isset($_POST["submit"])){
		$name=$_POST["username"];
		$pass=$_POST["password"];
		$sql="select * from tbl_login where username='{$name}' and password='{$pass}'";
		$res=$con->query($sql);
		{
			if($res->num_rows>0)
			{
				$row=$res->fetch_assoc();
				header("location:home.php");
				$_SESSION["id"]=$row["id"];
				$_SESSION["username"]=$row["username"];
				$_SESSION["password"]=$row["password"];
			}
		}
	}	
?>
<html>
	<head>
		<title></title>
	<?php
		include'header.php';
	?>
	</head>
	 
<body>
	<nav class="navbar navbar-white bg-dark text-white">
	<span class="navbar-brand mx-auto text-uppercase">ADMIN PORTAL</span>
	</nav>
</nav> 
	
		
		<div class='container '>
			<div class='col-md-6 mx-auto ' >
				<form method='post'>
					<div class=' form-group mt-5'>
						<label>UserName</label>
						<input type='text' name='username' class='form-control' required>
					</div>
					<div class=' form-group '>
						<label>password</label>
						<input type='password' name='password' class='form-control' required>
					</div>
					<input type='submit' name='submit' title='click to submit here' value='submit' class='btn btn-info'>
				</form>
			</div>
		</div>
</body>
</html>