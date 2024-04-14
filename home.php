<?php
	include"_config.php";
	session_start();
	if(!isset($_SESSION["id"]))
	{
		header("location:index.php");
	}
?>
<html>
	<head>
		<title></title>
	<?php include"header.php";?>
	</head>
<?php
	include'navbar.php';
?>

<body>
	<div class='container-fluid'>
			<div class='row'>
				<div class='col-md-2'>
					<?php include"sidebar.php"; ?>
				</div>
				
				<div class='col-md-9 mt-5 '>
					<h3>Dashboard</h3><hr>
						<div class='row '>
							
							<div class='col-md-3'>
								<div  class='card '>
									<a href='view_All.php' class="text-dark "  >
									<div class='container text-center' >
									<img src='Images\image.jpg' width='65%' >
									<br>
									<p class=''>View All students</p>
									</div>
								</div></a>
							</div>
							<div class='col-1'></div>
							<div class='col-md-3'>
								<div  class='card'>
									<a href='rp_classwise.php' class="text-dark"  >
									<div class='container text-center' >
									<img src='Images\r1.png' width='65%'>
									<br>
									<p class=''>Report(Classwise)</p>
									</div>
								</div></a>
							</div>
							<div class='col-1'></div>	
							<div class='col-md-3'>
								<div  class='card'>
									<a href='rp_subwise.php' class="text-dark" style='padding-left:12px;' >
									<div class='container text-center' >
									<img src='Images\r3.png' width='65%' class='mt-3'>
									<br>
									<p class='mt-3' style=''>Report(Subwise)</p>
									</div>
								</div></a>
							</div>
							
							
						</div>
				</div>
			</div>
		</div>
<?php
	include'footer.php';
?>
</body>

</html>