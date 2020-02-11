<!DOCTYPE html>
<html>
<head>
	<title>
	</title>
</head>
<body>
<h1>Funktioner</h1>
<footer>
	<?php 

	function calculateCircumference($length,$width)
	{
		echo "length=".$length;
		echo "<br>";
		echo "width=".$width;
		echo "<br>";
		echo "omkrets=";
		echo $length*2+$width*2;
		
	}
	calculateCircumference(7,4);
	?>
	<form action="" method="POST">
	 	 <label> Mata in värden för längd och bredd. 
          </label><br>
	 	 <label> längd</label>
         <input type="number" name="length"><br>
         <label>bredd</label>
         <input type="number" name="width"><br>
          <input type="submit" value="Bärkna">  
	  </form>
	  <?php    
               
	           echo  "<li>".$_POST{"length"}."</li>" ;
               echo  "<li>".$_POST["bredd"]."</li>" ;
               echo  "omkrets=".($_POST{"length"})*2+($_POST["width"])*2;
                
               echo "<br>";
               echo "area=". $_POST{"length"}*$_POST["width"];
		       
		
		
               ?>
               <?php 

	function calculateArea($length,$width)
	{
		echo "<li>"."length=".$length."</li>";
		echo "<li>"."width=".$width."</li>";
		echo "area=";
		echo $length*$width;
		
	}
	calculateArea(7,4);
	?>
</footer>
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
	
		font-style: normal;
		font-size: 16px;
		font-family:monospace; 
	}