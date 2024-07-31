<?php
session_start();
?>
<html>
	<head><title>Post Work</title></head>
<body>
    <style> body{background-image:url("15.jpg");
     background-position:center;
     background-repeat:no-repeat;
     background-size:100vw;
	height:100%;
	width:100%;
	background-image:linear-gradient(rgba(0,0,0,0.3),#ffff), url(15.jpg);
	
}

    .container{
        /*background-color:#f2bb66;
        margin-top:250px;
	margin-top:120px;
	border:2px solid;
	padding:10px;
	border-radius:30px;
	margin-left:550px;
	margin-right:570px;
	font-size:20px;
	margin-bottom:80px;*/
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
	h2{
	
text-align:center;
position:absolute; left:790px; top:70px;font-size:200%; font-family:sans-serif;	
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
	
        echo'
	<br><br><br><br><br><br><br><br><h2>Post your work</h2>
	<div class="container">
	<form method="POST" action=postwork.php><center><br><br><br><b>
        Date:<input type="date" name="date" required><br><br>
        Time:<input type="time" name="time" required><br><br>
        Duration:<input type="text" name="duration" placeholder="1 hour" required><br><br>
	    Service:<input type="text" name="service"><br><br>
	    Sub Service:<input type="text" name="subservice"><br><br>
		</b>
	    <button type="submit" name="submit">Confirm details</button>
        </center></form>
	</div>
        ';

	

?>
</body>

</html>
<?php
	include "connection.php";
    

    if(isset($_SESSION['mlogin']))
    {
        echo $_SESSION['mlogin'];
    }
	if(isset($_POST['submit']))
    {
        if(isset($_SESSION['mlogin']))
        {
		$current_user=$_SESSION['mlogin'];
		$sql="SELECT * FROM maid WHERE mlogin='$current_user'";
		$result=pg_query($con,$sql);
		while($row=pg_fetch_assoc($result))
		{
          $maid_name=$row['mname'];
          $area=$row['marea'];
          $date=$_POST['date'];
          $time=$_POST['time'];
          $duration=$_POST['duration'];
		  $service=$_POST['service'];	
		  $subservice=$_POST['subservice'];
		 
		  $query = "INSERT INTO maid_work(name,location,date,time,duration,service,subservice)
		  VALUES('$maid_name','$area','$date','$time','$duration','$service','$subservice')";
		  echo $query; 
		  $rs1=pg_query($con,$query);
		  if(!$rs1)
		  {
			echo "No insertion";
		  }
		  else
		  {
		    echo "Inserted";
		    header("Location:maid.php");
	      }
	
		}
    }
        

	
	
	
}
	pg_close($con);
?>
