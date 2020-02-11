<!DOCTYPE html>
<html>
<head>
	<title>
	</title>
</head>
<body>
<h1>Servervariabler</h1>
<footer>
	<?php
	echo $_SERVER['SERVER_NAME'];
	echo "<br>";
	echo $_SERVER['SERVER_ADDR'];
	echo "<br>";
	echo $_SERVER['PHP_SELF'];
	echo "<br>";
	echo $_SERVER['REMOTE_PORT'];
	echo "<br>";
	echo $_SERVER['REQUEST_METHOD'];
	

	?>
</footer>
</body>
</html>
<style>
	body{
		background:#8B008B;
	}
footer{
		display: block;
		position: fixed;
		bottom: 50%;
		left: 10%;
		height: 200%;
		text-align: center;
	    background-size: 200% 2005;
		color: white;
		width: :100%;
		top: 20%;
		
		font-style: normal;
		font-size: 16px;
		font-family:monospace; 
	}
	</style>