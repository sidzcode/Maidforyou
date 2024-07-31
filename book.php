<!--<?php
session_start();
?>
<html>
	<head><title>BookForm</title></head>
<body>
    <style> 
    
	h2{
		text-align:center;
	}
	</style>
	
	<?php
	if(isset($_GET['service']) && isset($_GET['subservice']))
	{
		$service=$_GET['service'];
	    $subservice=$_GET['subservice'];
        echo'
	<h2>Book a maid for '.$service.'</h2>
	<form method="POST" action=bookform.php><center><bold>
	    Service:<input type="text" name="service" value="'.$service.'"><br><br>
	    Sub Service:<input type="text" name="subservice" value="'.$subservice.'"><br><br>
		Location:<input type="text" name="location" required><br><br>
		Address:<input type="text" name="address" required><br><br>
		Date:<input type="date" name="date" required><br><br>
		Time:<input type="time" name="time" required><br><br>
		Duration:<input type="text" name="duration" placeholder="1 hour" required><br><br>
		
		<button type="submit" name="submit">Confirm my booking</button>
        </center></form>
        ';

	}
    // $service=isset($_GET['service']);
	// $subservice=isset($_GET['subservice']);
	

?>

</body>
</html>
