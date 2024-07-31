<!doctype html>

<html>
<head>
	<title>maidproregister</title>
<style> .s{
margin-top:50px;
padding-bottom:25px;
border:3px solid;
margin-right:500px;
margin-left:500px;
font-size:20px;
}
button{height:30px;
border-radius:10px; width:90px;
color:black;
background-color:white;
}
select{background-color:white;}

</style>
</head>
<body bgcolor=#ffffe0>
	<div class="s"><h1><b><center>Want to apply for maid?</center></b></h1>
<hr width="70%"><br>
<form action="maidregister1.php" method="POST"><center>
	Name:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text"required name="m_name"><br><br>
	Contact No:&nbsp<input type="number"required name="m_contact"><br><br>
	Gender:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input type= "radio" name="gender"required value=1>Male
	<input type= "radio" name="gender"required value=2>Female
	<br><br>
	City:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<select name="m_city">
		<option>Select one</option>
		<option value="Pune">Pune city</option>
	</select>
	<br><br>
	Area:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp<select name="m_area">
		<option>Select one</option>
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
		<option value="Vadgoan Sheri">Vadgoan sheri</option>
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

	Username:&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text"required name="maiduname"><br><br>
	Password:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="password"required name="maidpass"><br><br>
	Confirm Password:<input type="password"required><br><br>
</center> 


<center>

Age:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="number"size="8"><br><br>
Upload your image:&nbsp&nbsp&nbsp<input type="file" color = white><br><br>
Skills:&nbsp&nbsp&nbsp<input type="checkbox" name="cleaning"><label> Cleaning </label>
	  <input type="checkbox" name="cooking"><label> Cooking </label>
	  <input type="checkbox" name="nursing"><label> Nursing </label><br><br>
	  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="checkbox" name="baby sitting"><label> Baby sitting </label>
	  <input type="checkbox" name="elderly care"><label> Elderly care </label><br><br> 
Experience:
<select name="m_exp">
<option>Select one</option>
<option value= "3 months">3 months</option>
<option value="6 months">6 months</option>
<option value="9 months">9 months</option>
<option value="1 year">1 year</option>
<option value="2 years">2 years</option>
<option value="3 years">3 years</option>
<option value="5 years">5 years</option>
<option value="5 years and Above">5 years and Above</option>
</select><br><br>
<button type="submit">Apply</button>
<button type="reset">Reset</button></center>
</div>
</form>
</body>

</html>

<?php
	include "connection.php";
	
	$mname=$_POST['m_name'];	
	$mcontact=$_POST['m_contact'];
	$mgen=$_POST['gender'];
	$mcity=$_POST['m_city'];
	$marea=$_POST['m_area'];
	$musername=$_POST['maiduname'];
	$pas=$_POST['maidpass'];
	$clean=$_POST['cleaning'];
	$cook=$_POST['cooking'];
	$nurse=$_POST['nursing'];
	$babysit=$_POST['baby sitting'];
	$eldercare=$_POST['elderly care'];
	$mexp=$_POST['m_exp'];

	$qu="INSERT INTO maid(mname,marea,mcontact,mexp,mlogin,mpwd) VALUES('$mname','$marea','$mcontact','$mexp','$musername','$pas')";

	echo $qu;
	$rs=pg_query($con,$qu);
	if(!$rs)
	{
		echo "No insertion";
	}
	else
	{
		echo "Inserted";
	}

	pg_close();
?>















