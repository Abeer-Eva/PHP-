<!DOCTYPE html>
<html>
<head>
	<title>
	</title>
</head>
<body>
<h1>Sända och ta emot data</h1>
<?php $username=$_GET['username'];
      $telefon=$_GET['telefon'];
    
      echo "your name :".$username;
      echo "<br>";
      echo "your tel :".$telefon;
      ?>
      
  <?php  echo  "<br>";?>
   <?php $username=$_POST['username'];
      $telefon=$_POST['telefon'];
    
      echo "your name :".$username;
      echo "<br>";
      echo "your tel :".$telefon;
      ?>
</body>
</html>
<style>
	body{
			background-color: #8B008B;
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
	    color:white;
		font-style: normal;
		font-size: 16px;
		font-family:monospace; 
	}
