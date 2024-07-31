 <html>

<head>
    <title>cooking</title>
        <link rel="stylesheet" href="cook1.css">

</head>

<body bgcolor="white">
	 <div class="lefthalf">
	</div>
<div id="righthalf">


<?php
$con=pg_connect("host=192.168.16.252  user=BG24 dbname=BG24 password=") or die("could not connect");
if(!$con)
	echo"Unable to connect";
else
	echo"CONNECTED!";
?>
<?php

	if(isset($_POST['proceed']))
	{
	
	$category=$_POST['cooking'];
	
	
	foreach($category as $cat_item)
	{
		echo $cat_item;
	}
	
	$query="INSERT INTO category(ctype,csubtype) values ('cooking','$cat_item')";	
	echo $query;
	$res=pg_query($con,$query);
	if(!$result)
        	{
		 echo "No insertion";
		}
	else
		{
		   echo "inserted";
		}	
 	 
	}
	pg_close($con);

?>

<?php

    	  $service=$_GET['service'];
	  $subservice1='veg'; 
	  $veg_rate=300; 
	  $subservice2='non veg'; 
	  $nonveg_rate=500; 
	 

			echo'<div class="">
				<div class="cooking">
					<center><h2>Veg</h2><br>
					<p class="details">Authentic Vegeterian Cooks</p><br>
					<p class="rate">Starting at '.$veg_rate.'</p><br>
					<a class="book" href="bookform.php?service='.$service.'&subservice='.$subservice1.'">Book Now</a></center>
				</div>

				<div class="cooking">
					<center><h2>Non Veg</h2><br>
					<p class="details">Expertise in non-veg dishes</p><br>
					<p class="rate">Starting at '.$nonveg_rate.'</p><br>
					<a class="book" href="bookform.php?service='.$service.'&subservice='.$subservice2.'">Book Now</a></center>
				</div>

				
			</div>';

			

			

			?>
	
		<script>
			let brooming=document.getElementById("brooming");
			brooming.addEventListener("change",function()
			{
				let proceed= document.getElementById("proceed")
			}
		</script>		
				
    		
	<!--<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">	
		<div class="cooking">
			<input type="checkbox" name="cooking[]" id="veg" value="veg">
				<label for="veg">
					<h2> veg</h2><br><br>
                			<p>Reliable and trustworthy house help, at your doorstep</p><br>
                			<p>Starting at <span style="color: rgb(176, 51, 17)" style="font-weight:bold;">Rs500</span></p><br><br>
				</label>
		</div>
		<div class="cooking">
			<input type="checkbox" name="cooking[]" id="non veg" value="non veg">
				<label for="non veg">
					<h2> Non Veg </h2><br><br>
                			<p>Tired of wasing the dishes? Dont have a dishwasher?</p><br>
                			<p>Starting at <span style="color: rgb(176, 51, 17)" style="font-weight:bold;">Rs500</span></p><br><br>
				</label>
		</div>	
		<
		<a href="prologin2.php"type=button value=Proceed id="proceed">Proceed</a>	
	</form>
	
	</div>
	
		<script>
			let veg=document.getElementById("veg");
			veg.addEventListener("change",function()
			{
				let proceed= document.getElementById("proceed");
			}
		</script>-->		
					
   
</body>

</html>


