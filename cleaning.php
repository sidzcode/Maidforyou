<html>

<head>
    <title>cleaning</title>
        <link rel="stylesheet" href="cleaning1.css">

</head>

<body bgcolor="white">
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
	
	$category=$_POST['cleaning'];
	
	
	foreach($category as $cat_item)
	{
		echo $cat_item;
	}
	
	$query="INSERT INTO category(ctype,csubtype) values ('cleaning','$cat_item')";	
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
	  $subservice1='brooming and mopping'; 
	  $veg_rate=100; 
	  $subservice2='dish washing'; 
	  $nonveg_rate=100; 
	 

			echo'<div class="">
				<div class="cleaning">
					<center><h2>Brooming and Mopping</h2><br>
					<p class="details">Reliable and trustworthy house help, at your doorstep</p><br>
					<p class="rate">Starting at '.$broomingmopping_rate.'</p><br>
					<a class="book" href="bookform.php?service='.$service.'&subservice='.$subservice1.'">Book Now</a></center>
				</div>

				<div class="cleaning">
					<center><h2>Dish Washing</h2><br>
					<p class="details">Tired of wasing the dishes? Dont have a dishwasher?</p><br>
					<p class="rate">Starting at '.$dishwashing_rate.'</p><br>
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
		<div class="cleaning">
			<input type="checkbox" name="cleaning[]" id="brooming" value="brooming">
				<label for="brooming">
					<h2> Brooming and Mopping</h2><br><br>
                			<p>Reliable and trustworthy house help, at your doorstep</p><br>
                			<p>Starting at <span style="color: rgb(176, 51, 17)" style="font-weight:bold;">Rs500</span></p><br><br>
				</label>
		</div>
		<div class="cleaning">
			<input type="checkbox" name="cleaning[]" id="dishwashing" value="dish">
				<label for="dishwashing">
					<h2> Dish Washing </h2><br><br>
                			<p>Tired of wasing the dishes? Dont have a dishwasher?</p><br>
                			<p>Starting at <span style="color: rgb(176, 51, 17)" style="font-weight:bold;">Rs500</span></p><br><br>
				</label>
		</div>	
		<div class="cleaning">
			<input type="checkbox" name="cleaning[]" id="mopping" value="mop">
				<label for="mopping">
					<h2>Mopping </h2><br><br>
                			<p>Do you have ocd?</p><br>
                			<p>Starting at <span style="color: rgb(176, 51, 17)" style="font-weight:bold;">Rs500</span></p><br><br>
				</label>
		</div>
		<a href="prologin2.php"type=button value=Proceed id="proceed">Proceed</a>	
	</form>
		<script>
			let brooming=document.getElementById("brooming");
			brooming.addEventListener("change",function()
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


