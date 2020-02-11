<!DOCTYPE html>
<html>
<head>
	<title><?php
	echo "MY FIRST PAGE";

	?>

	</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<h1>Första php sida</h1>
<footer>
	<p>Luleå tekniska universitet | Webbutveckling II - Skriptspråk och databaser |  <ditt användarnamn>* | 2018 </p>
	   <?php
            echo "Denna text är genererad med utskriftskommandot i PHP.";?>
	
	  <form action="" method="POST">
         <input type="text" name="namn"><br>
	       <input type="submit">  
	  </form>
 
        
         <?php
       

         if (!empty($_POST["namn"])) {
 	
 

        echo $_POST["namn"];
		echo "<br>";
	    echo "Hej"." ".$_POST["namn"];
		echo "<br>";
		echo "Baklänges"." ".$_POST["namn"];
		echo "<br>";
		echo strtolower("Gemener"." ".$_POST["namn"]);
		echo "<br>";
		echo strtoupper("Versaler"." ".$_POST["namn"]);
		echo "<br>";
		$length=strlen($_POST["namn"]);
		echo "Antal tecken:".$length;
		} 
		else {
		echo "Hej Abeer Antonson";}?>
         <div class="LtuName">
		<h2> abeala-9</h2>
	</div>

    </div>
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
	/*.p {
		display: flex;
		bottom: 20%;
		border-style: dotted;
	}
    .h2 {
    display:flex;
	position: absolute;
	bottom: 20%;
	left: 50%;
	border-style: dotted;

     }*/
    .button {
	background-color:#B22222;
	padding:10px 25px;
	margin: 10px 5px;

    }
     </style>