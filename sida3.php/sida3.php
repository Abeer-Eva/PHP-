<!DOCTYPE html>
<html>
<head>
	<title>
	</title>
    </head>


    <body>
  <h1>Loopar och villkorssatser</h1>
<footer>
		 <label for="feedback"> Feedback</label>
		
		<form action="" method="POST">
           <input type="text"  name="feedback" >
              
                <button onclick="spara"> spara</button><br>
		   <input type="text" name="sökord">
		       <input type="submit" value="Search">

		       <?php
		       echo $_POST{"sökord"};
		       echo "<br>";
		       echo "There is "." ";
		       echo str_word_count($_POST["feedback"]);
		       echo " "."words in this text";
               echo "<br>";
              
		     ?>
		     
		     <?php 
		     $array=$_POST{"feedback"};
             $search=$_POST{"sökord"};

		     echo "<pre>";
		     print_r(explode(" ",$array));
		     echo "</pre>";
?>
<?php  $result=array_diff($array, $search);
                   print_r($result);?>
         </form>
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