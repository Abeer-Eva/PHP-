<!DOCTYPE html>
<html>
<head>
	<title><?php
	echo "MY ANDRA PAGE";

	?>
	</title>
</head>
<body>
<h1>Arrayer</h1>
<footer>
	<div class="result">
	 <form action="" method="POST">
	 	 <label> Mata in tre sorters djur man kan hitta på en bondgård.
          </label><br>
	 	 <label> Djur1</label>
         <input type="text" name="Djur1"><br>
         <label>Djur2</label>
         <input type="text" name="Djur2"><br>
         <label> Djur3</label>
         <input type="text" name="Djur3"><br>
	       <input type="submit">  
	  </form>
            <div> <style type="text/css">   .h2{
   font: italic bold 12px/30px Georgia, serif;
   
}</style>
              
            	<h2> PÅ den här sidan jag ska Skapa ett formulär där användaren kan mata in tre sorters djur man kan hitta på en bondgård.
Skapa en knapp som när man klickar på den utför följande:
Sparar djuren som är första djuret ska ligga på index 0 i arrayen, andra djuret på index 1 och tredje djuret på index 2. Skriver ut arrayen. Ersätter djuret på tredje platsen med djuret ”Struts”.
Lägger till ett fjärde djur ”Alpacka” sist i arrayen.Tar bort det första elementet helt från arrayen.
Skriver ut arrayen i råformat.
Skriver ut elementet som finns på andra platsen.</h2>
            	</div>
	       <?php 
        $D1= $_POST["Djur1"];$D2= $_POST["Djur2"];$D3=$_POST["Djur3"];
	       $farmAnimals = array($D1 , $D2, $D3);
	      
	       
	       
               echo  "<li>".$_POST["Djur1"]."</li>" ;
               echo  "<li>".$_POST["Djur2"]."</li>" ;
               echo  "<li>".$_POST["Djur3"]."</li>" ;
               echo "<pre>";
               print_r ($farmAnimals);
               echo "</pre>";      
               echo $farmAnimals[2]."<br>";
               $farmAnimals[2]="Struts";
               print_r ($farmAnimals); 
               echo "<br>";
               $farmAnimals[3]="Alpacka";
               print_r ($farmAnimals); 
               array_pop($farmAnimals);
               echo "<br>";
               print_r ($farmAnimals);
               echo "<br>";
               echo $farmAnimals[2]; 
                ?>
            </div>
             </footer>
          </body>
          </html>
          <style>
          div.result{
          	   background-color: grey;
               height: 20%;
               width: 100%;
               overflow-y: scroll;
          }
          body{
          	 background:#8B008B;
          }
   footer{
   
      display: block;
      position: fixed;
      bottom: 50%;
      left: 0;
      text-align: center;
      background-size: 200% 200%;
     
      padding: 50px 50px;
      width: :100%;
      height: 300%;
      top: 20%;
      color: white;
      font-style: normal;
      font-size: 14px;
      font-family:monospace; 
      .h2{
   font: italic bold 12px/30px Georgia, serif;
   
}
   }

