<?php
	include"header.php";
	
?>
<html>
	<head>
		<title></title>
	</head>	
<body>
<nav class="navbar navbar-white bg-dark text-white " >
	<div >
		<span class="navbar-brand mb-0 h1 ">STUDENT PORTAL</span>
	</div>
	<div >
		<span>Welcome <?php echo $_SESSION["username"];?></span>
	
		<span class="navbar-brand mb-0 h1 ml-3 "> <a href='logout.php' class='text-light ' title="Do you want logout!"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></span>
	</div>
</nav>


</body>

</html>