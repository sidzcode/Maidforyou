<!doctype html>

<html>
<head>
	<title>proregister</title>
<style> .l{margin-top:120px;
border:2px solid;
padding:10px;
border-radius:30px;
margin-left:550px;
margin-right:550px;
font-size:20px;
}
button{height:35px;
	border-radius:10px;	width:100px;
		 
color:black;
background-color:white;
} 
body{
 background-color:#f7e7ce;

}
 select{
	 background-color: white; 
}
option{
	width:10px;
}
</style>
</head>
<body>
	<div class="l"><h1><b><center>Maidforyou</center></b></h1><hr width="65%"
color="black";>
	<br>
<form action="proregister.php" method="POST"><center>
	Name:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text"required name="u_name"><br><br>
	Contact No:&nbsp&nbsp<input type="number"required name="u_contact"><br><br>
	<!--Gender:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type="radio"name="gender"required value="m">Male
	<input type="radio"name="gender"required value="f">Female
	<br><br>-->
	City:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	    <select name="city" >
		<option>Select one</option>
		<option value="Pune">Pune city</option>
	</select>
	<br><br>
	Area:
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<select name="area" >
		<option >Select one</option>
		<option value="Somwar peth">Somwar peth</option>
		<option value="Mangalwar peth">Mangalwar peth</option>
		<option value="Budhwar peth">Budhwar peth</option>
		<option value="Guruwar peth">Guruwar peth</option>
		<option value="Shukrawar peth">Shukrawar peth</option>
		<option value="Shaniwar peth">Shaniwar peth</option>
		<option value="Raviwar peth">Raviwar peth</option>
		<option value="Narayan peth">Narayan peth</option>
		<option value="Deccan">Deccan</option>
		<option value="FC Road">FC Road</option>
		<option value="SB Road">SB Road</option>
		<option value="MMCC">MMCC</option>
		<option value="Gokhale Nagar">Gokhale Nagar</option>
		<option value="BMCC">BMCC</option>
		<option value="SP College">SP College</option>
		<option value="Ganesh peth">Ganesh peth</option>
		<option value="Nana peth">Nana peth</option>
		<option value="PCMC">PCMC</option>
		<option value="Chinchwad">Chinchwad</option>
		<option value="Pimpri">Pimpri</option>
		<option value="Shivajinagar">Shivajinagar</option>
		<option value="Pune Railway Station">Pune Railway Station</option>
		<option value="Kasba peth">Kasba peth</option>
		<option value="Aundh">Aundh</option>
		<option value="Baner">Baner</option>
		<option value="Koregoan park">Koregoan park</option>
		<option value="Kothrud">Kothrud</option>
		<option value="Mayur Colony">Mayur Colony</option>
		<option value="Viman Nagar">Viman Nagar</option>
		<option value="Kalewadi">Kalewadi</option>
		<option value="Vadgoan sheri">Vadgoan sheri</option>
		<option value="JM Road">JM Road</option>
		<option value="Karishma Scty">Karishma Scty</option>
		<option value="Nadbhramha Scty">Nadbhramha Scty</option>
		<option value="Market yard">Market yard</option>
		<option value="Dhankawdi">Dhankawdi</option>
		<option value="Bavdhan">Bavdhan</option>
		<option value="Ravet">Ravet</option>
		<option value="Balewadi">Balewadi</option>
		<option value="Quarter Gate">Quarter Gate</option>
		<option value="Camp, Pune">Camp, Pune</option>
		<option value="Mhatre Bridge">Mhatre Bridge</option>
		<option value="Yash Lawns">Yash Lawns</option>
		<option value="Mukund Nagar">Mukund Nagar</option>
		<option value="HA Colony">HA Colony</option>
		<option value="Sinhgad Road">Sinhgad Road</option>
		<option value="Vishrantwadi">Vishrantwadi</option>
		<option value="Hadapsar">Hadapsar</option>
		<option value="Fugewadi">Fugewadi</option>
		<option value="Kasarwadi">Kasarwadi</option>
		<option value="Kirkitwadi">Kirkitwadi</option>
		<option value="Shaniwarwada">Shaniwarwada</option>
		<option value="ABC">ABC</option>
		<option value="Neha Cafe">Neha Cafe</option>
		<option value="Dighi">Dighi</option>
		<option value="Warje">Warje</option>
		<option value="Bhosari">Bhosari</option>
		<option value="Sanghvi">Sanghvi</option>
		<option value="Dhayri">Dhayri</option>
</select required><br><br>

	Username:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text"required name="username"><br><br>
	Password:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="password"required name="password"><br><br>
	Confirm Password:<input type="password"required><br><br>
</center>
<center>
<p>Hi! I am your new user.</p><button type="submit" name="sub">Submit Form</button>
<button type="reset">Reset</button>
</center>

</div>
</form>
</body>

</html>
<?php
	include "connection.php";
	if(isset($_POST['sub']))
	{	
	$uname=$_POST['u_name'];
	$ucontact=$_POST['u_contact'];
	//$gen=$_POST['gender'];
	$ucity=$_POST['city'];
	$uarea=$_POST['area'];
	$username=$_POST['username'];
	$upassword=$_POST['password'];
	echo $gen;
	//$uid=7; //select max(uid) from user1;
	$query="INSERT INTO user1(uname,ucontact,uarea,ulogin_name,upwd) VALUES ('$uname','$ucontact','$uarea','$username','$upassword')";
/*	$query="INSERT INTO user1(,uname,ucontact,uarea,ulogin_name,upwd) VALUES (,'$uname','$ucontact','$uarea','$username','$upassword')";*/

	echo $query;	
	$result=pg_query($con,$query);
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










