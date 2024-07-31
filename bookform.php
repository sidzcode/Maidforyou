<?php
session_start();
?>
<html>
	<head><title>BookForm</title></head>
<body>
    <style> body{/*background-image:url("15.jpg"*/);
     background-position:center;
     background-repeat:no-repeat;
     background-size:100vw;
	height:100%;
	width:100%;
	background-image:linear-gradient(rgba(0,0,0,0.3),#ffff), url(15.jpg);
}
    
	h2{
		text-align:center;
position:absolute; left:710px; top:70px; font-size:200%; font-family:sans-serif;	}
	.container{
	/*border:2px solid;
	padding:20px;
	border-radius:5px;
	box-shadow:0px 0px 5px rgba(0,0,0,0.1);
	width:200px;
	margin-left:50px;*/ 
	/*margin-top:50px;
padding-bottom:50px;
border:3px solid;
margin-right:500px;
margin-left:500px;
font-size:20px;*/
	background-color:#f2bb66;
       	margin-top:250px;
	margin-top:120px;
	border:2px solid;
	padding:10px;
	border-radius:30px;
	margin-left:600px;
	margin-right:660px;
	font-size:20px;
	margin-bottom:80px;
	margin-top:30px;
	padding-bottom:12px;
	padding-top:20px;
	height:50%;
	box-shadow:rgba(0,0,0,0.35)0px 5px 15px;
	}
	button{
	width: 200px;
	color: black;
	font-size: 20px;
	padding: 5px 0;
	background:#fff;
	border:0;
	border-radius:7px;
	outline:none;
	margin-top:30px;
	font-weight:bold;
	/*position:absolute;
	top:600px;*/
	background-color:#f2bb66;
	border:2px solid  #f9004d ;
	}
	/*button:hover{
    background-color: orangered;
    border: 2px solid #f9004d;
	color:white;
	opacity:0.8;
    cursor: pointer;}*/
	</style>
	
	<?php
	if(isset($_GET['service']) && isset($_GET['subservice']))
	{
		$service=$_GET['service'];
	    $subservice=$_GET['subservice'];
        echo'
	<br><br><br><br><br><br><br><br><h2>Book a maid for '.$service.'</h2>
	<div class="container">
	<form method="POST" action=bookform.php><center><b><br><br>
	    Service:<input type="text" name="service" value="'.$service.'"><br><br>
	    Sub Service:<input type="text" name="subservice" value="'.$subservice.'"><br><br>
		Location:<input type="text" name="location" required><br><br>
		Address:<input type="text" name="address" required><br><br>
		Date:<input type="date" name="date" required><br><br>
		Time:<input type="time" name="time" required><br><br>
		Duration:<input type="text" name="duration" placeholder="1 hour" required><br>
		</b>
		<button type="submit" name="submit">Confirm booking</button>
        </center></form>
	</div>
        ';

	}
    // $service=isset($_GET['service']);
	// $subservice=isset($_GET['subservice']);
	

?>
<?php
	$con=pg_connect("host=192.168.16.252 user=BG24 dbname=BG24 password=") or die("could not connect");
	
	if(isset($_POST['submit']))
    {
		$current_user=$_SESSION['ulogin_name'];
		$sql="SELECT * FROM user1 WHERE ulogin_name='$current_user'";
		$result=pg_query($con,$sql);
		while($row=pg_fetch_assoc($result))
		{
        	  $user_name=$row['uname'];
		  $location=$_POST['location'];	
		  $address=$_POST['address'];
		  $date=$_POST['date'];
		  $duration=$_POST['duration'];
		  $time=$_POST['time'];
		  $service=$_POST['service'];
		  $subservice=$_POST['subservice'];

		  $query = "INSERT INTO requirements(name,location,address,date,time,duration,service,subservice)
		  VALUES('$user_name','$location','$address','$date','$time','$duration','$service','$subservice')";
		  echo $query; 
		  $rs1=pg_query($con,$query);
		  if(!$rs1)
		  {
			echo "No insertion";
		  }
		  else
		  {
		    echo "Inserted";
		    header("Location:result_for_user.php");
	      }

	
	}

	
}
	pg_close($con);
?>
</body>

</html>

