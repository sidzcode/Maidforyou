<html>

<head>
    <title>babysitting</title>
        <link rel="stylesheet" href="baby1.css">

</head>

<body bgcolor="white">

 <div class="lefthalf">
	</div>
<div id="righthalf">

<?php
$con=pg_connect("host=192.168.16.252  user=BG24 dbname=BG24 password=") or die("could not connect");

?>
<?php

	if(isset($_POST['proceed']))
	{
	
	$category=$_POST['baby'];
	
	
	foreach($category as $cat_item)
	{
		echo $cat_item;
	}
	
	$query="INSERT INTO category(ctype,csubtype) values ('baby','$cat_item')";	
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
  
	<!--<section>
		 <div class="image">
        		<img src="baby1.jpg"  height="700px" width="500px" />
    		</div>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">	
		<div class="baby">
			<input type="checkbox" name="baby[]" id="infant_care" value="infant care">
				<label for="infant care">
					<h2> infant care</h2><br><br>
                			<p>Reliable and trustworthy house help, at your doorstep</p><br>
                			<p>Starting at <span style="color: rgb(176, 51, 17)" style="font-weight:bold;">Rs500</span></p><br><br>
				</label>
		</div>
		<div class="baby">
			<input type="checkbox" name="baby[]" id="hourly based" value="hourly based">
				<label for="hourly based">
					<h2> hourly based </h2><br><br>
                			<p>Tired of wasing the dishes? Dont have a dishwasher?</p><br>
                			<p>Starting at <span style="color: rgb(176, 51, 17)" style="font-weight:bold;">Rs500</span></p><br><br>
				</label>
		</div>	
		<
		<a href="prologin2.php"type=button value=Proceed id="proceed">Proceed</a>	
	</form>
	</div>
		<script>
			let infant_care=document.getElementById("veg");
			infant_care.addEventListener("change",function()
			{
				let proceed= document.getElementById("proceed")
		</script>-->


<?php

    	  $service=$_GET['service'];
	  $subservice1='hourly based'; 
	  $hourly_rate=700; 
	  $subservice2='infant care'; 
	  $infant_rate=700; 
	 

			echo'<div class="">
				<div class="baby">
					<center><h2>Hourly based</h2>
					<p class="details">Professional babysitter services</p>
					<p class="rate">Starting at '.$hourly_rate.'</p><br>
					<a class="book" href="bookform.php?service='.$service.'&subservice='.$subservice1.'">Book Now</a></center>
				</div>

				<div class="baby">
					<center><h2>Infant Care</h2>
					<p class="details">Providing a companion for your kid who cares like a mother</p>
					<p class="rate">Starting at '.$infant_rate.'</p><br>
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
					
    
</body>

</html>


