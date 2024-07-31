<html>

<head>
    <title>nursing</title>
        <link rel="stylesheet" href="nurse1.css">

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
	
	$category=$_POST['nurse'];
	
	
	foreach($category as $cat_item)
	{
		echo $cat_item;
	}
	
	$query="INSERT INTO category(ctype,csubtype) values ('nurse','$cat_item')";	
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
	  $subservice1='Specialized Nurse'; 
	  $first_rate=600; 
	  $subservice2='visiting nurse'; 
	  $second_rate=600; 
	 

			echo'<div class="">
				<div class="nurse">
					<center><h2>Specialized Nurse</h2><br>
					<p class="details">Experienced and efficient nursing staff</p>
					<p class="rate">Starting at '.$first_rate.'</p><br>
					<a class="book" href="bookform.php?service='.$service.'&subservice='.$subservice1.'">Book Now</a></center>
				</div>

				<div class="nurse">
					<center><h2>Visiting Nurse</h2><br>
					<p class="details">Qualified Patient Care Takers to clients</p>
					<p class="rate">Starting at '.$second_rate.'</p><br>
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
</div>		
  
	<!--<section>
		 <div class="image">
        		<img src="baby1.jpg"  height="700px" width="500px" />
    		</div>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">	
		<div class="nurse">
			<input type="checkbox" name="nurse[]" id="specialized_nurse" value="Specialized nurse">
				<label for="Specialized_nurse">
					<h2> Specialized Nurse</h2><br><br>
                			<p>Reliable and trustworthy house help, at your doorstep</p><br>
                			<p>Starting at <span style="color: rgb(176, 51, 17)" style="font-weight:bold;">Rs500</span></p><br><br>
				</label>
		</div>
		<div class="nurse">
			<input type="checkbox" name="nurse[]" id="visiting_nurse" value="visiting_nurse">
				<label for="visiting_nurse">
					<h2> Visiting Nurse </h2><br><br>
                			<p>Tired of wasing the dishes? Dont have a dishwasher?</p><br>
                			<p>Starting at <span style="color: rgb(176, 51, 17)" style="font-weight:bold;">Rs500</span></p><br><br>
				</label>
		</div>	
		<
		<a href="prologin2.php"type=button value=Proceed id="proceed">Proceed</a>	
	</form>
</div>
		<script>
			let Specialized_nurse=document.getElementById("veg");
			Specialized_nurse.addEventListener("change",function()
			{
				let proceed= document.getElementById("proceed")
		</script>		
					
    <!--<div class="col">
        <div class="header">
	
            <div class="cleaningcard">
                <a href="#" class="cleaningadd">&plus;</a>
                <h2> Brooming </h2><br><br>
                <p>Reliable and trustworthy house help, at your doorstep</p><br>
                <p>Starting at <span style="color: rgb(176, 51, 17)" style="font-weight:bold;">Rs500</span></p><br><br>
            </div>
            <div class="cleaningcard">
                <a href="#" class="cleaningadd">&plus;</a>
                <h2> Dish Washing </h2><br><br>
                <p>Tired of wasing the dishes? Dont have a dishwasher?</p><br>
                <p>Starting at <span style="color: rgb(176, 51, 17)" style="font-weight:bold;">Rs500</span></p><br><br>
            </div>
            <div class="cleaningcard">
                <a href="#" class="cleaningadd">&plus;</a>
                <h2> Mopping </h2><br><br>
                <p>Do you have ocd?</p><br>
                <p>Starting at <span style="color: rgb(176, 51, 17)" style="font-weight:bold;">Rs500</span></p><br><br>
            </div>
        </div>
    </div>-->
</body>

</html>


