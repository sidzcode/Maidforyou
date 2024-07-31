<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<style>
		*{     
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
    box-sizing: border-box;
}
.container{
    width: 100%;
    height: 100vh;
  background-image: url(9.jpg);
    background-size: cover;
    background-position: center;
    /* filter: blur(1px); */
	flex-basis: 50%;
	left: -10;
	margin: auto;
	padding-left:30px;
	display:inline-block;
	margin-bottom: 10px;
}


#menuIcon{
    width: 60px;
    border-radius: 50%;
    position: fixed;
    top: 40px;
    right: 60px;
    cursor: pointer;
    z-index: 100;
}
.menu-box{
    width: 0;
    height: 0;
    background: rgba(0, 0, 0, 0.8);
    position: fixed;
    top: 0;
    right: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    border-bottom-left-radius: 100%;
    transition: width 0.5s, height 0.5s, border-radius 0.5s;
}

.menu-box.open-menu{
    width: 100%;
    height: 100vh;
    border-bottom-left-radius: 0;
}

.menu-box.open-menu ul li{
    opacity: 1;
    transform: translate(0);
    transition: transform 1s, opacity 1s;
    transition-delay: 0.5s;
}

.menu-box ul li{
    list-style: none;
    margin: 20px;
    text-align: center;

    opacity: 0;
    transform: translate(30px);
}

.menu-box ul li a{
    display: inline-block;
    text-decoration: none;
    color: #fff;
    font-size: 50px;
    font-weight: 600;
    position: relative;
    text-shadow: 0 0 0 red;
    transition: text: shadow 0.5s, transform 0.5s;
}
.menu-box ul li a:hover{
    text-shadow: -3px 3px 0 red;
    transform: translate(-1.5px);
}
.menu-box ul li a::after{
    content: '';
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background: #fff;
    position: absolute;
    bottom: 19px;
    right: -18px;
    opacity: 0;
    box-shadow: 0 0 0 red;
    transition: box-shadow 0.5s;
}
.menu-box ul li a:hover::after{
    opacity: 1;
    box-shadow: -2px 2px 0 red;
}
.h2{
	text-decoration: none;
}

.cute1{
	overflow:hidden;
	width:300px;
	height:200px;
	display:inline-block;
	border-radius:10px;
	padding: 20px 25px;
	box-sizing: border-box;
	cursor: pointer;
	margin-block:20px;
	
	background-color:lightpink;
	transition: transform 0.5s;
	margin-right: 500px;
	margin-left: 800px;
	margin-top:120px;
	text-align:center;
	box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.5);
	text-decoration: none;
}
.cute1 p1{
	position:relative;
	font-size:19px;
	display:flex;
	text-align:center;
	margin-top:40px;
	/*margin-left:-1px;*/
	margin-right:30px;
}
.cute1:hover{
	transform:translateY(-10px);
}
.cute2{
	overflow:hidden;
	width:300px;
	height:200px;
	display:inline-block;
	border-radius:10px;
	padding: 20px 25px;
	box-sizing: border-box;
	cursor: pointer;
	margin-block:20px;
	background-size:cover;
	background-color:lightpink;
	transition: transform 0.5s;
	margin-right: 50px;
	margin-left: 420px;
	margin-top:-15px;
	text-align:center;
	box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.5);
}
.cute2 p1{
	position:relative;
	font-size:20px;
	display:flex;
	text-align:center;
	margin-top:-58px;
	/*margin-left:-100px;*/
	margin-right:25px;
}
.cute2:hover{
	transform:translateY(-10px);
}

.cute3{
	overflow:hidden;
	width:300px;
	height:200px;
	display:inline-block;
	border-radius:10px;
	padding: 20px 25px;
	box-sizing: border-box;
	cursor: pointer;
	margin-block: 20px;
	background-size:cover;
	background-color:lightpink;
	transition: transform 0.5s;
	margin-right: 50px;
	margin-left:1190px;
	margin-top:-213px;
	/*margin-bottom:100px;*/
	text-align:center;
	box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.5);
}
.cute3 p1{
	position:relative;
	font-size:19px;
	display:flex;
	text-align:center;
	margin-top:35px;
	/*margin-left:-100px;*/
	margin-right:-5px;
}
.cute3:hover{
	transform:translateY(-10px);
}
.cute4{
	overflow:hidden;
	width:300px;
	height:200px;
	display:inline-block;
	border-radius:10px;
	padding: 20px 25px;
	box-sizing: border-box;
	cursor: pointer;
	margin-block:20px;
	background-size:cover;
	background-color:lightpink;
	transition: transform 0.5s;
	margin-right: 50px;
	margin-left: 600px;
	margin-top:60px;
	text-align:center;
	box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.5);
}
.cute4 p1{
	position:relative;
	font-size:20px;
	display:flex;
	text-align:center;
	margin-top:30px;
	/*margin-left:-100px;*/
	margin-right:5px;
}
.cute4:hover{
	transform:translateY(-10px);
}

.cute5{
	overflow:hidden;
	width:300px;
	height:200px;
	display:inline-block;
	border-radius:10px;
	padding: 20px 25px;
	box-sizing: border-box;
	cursor: pointer;
	margin-block:20px;
	background-size:cover;
	background-color:lightpink;
	transition: transform 0.5s;
	margin-right: 50px;
	margin-left: 1050px;
	margin-top:-290px;
	text-align:center;
	box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.5);
}

.cute5 p1{
	position:relative;
	font-size:20px;
	display:flex;
	text-align:center;
	margin-top:30px;
	/*margin-left:-100px;*/
	margin-right:30px;
}
.cute5:hover{
	transform:translateY(-10px);
}
#out{
	top:0px;
	width:7%;
	padding: 10px 30px;
	cursor: pointer;
	display: block;
	margin: auto;
	background: linear-gradient(to right,#ff105f,#ffad06);
	border:0;
	outline:none;
	border-radius:30px;
	font-weight:bold;
	margin-top: -100px;
	margin-left: 3px;
}
h1{color:#6f2da8;

}



	</style>
 
    <title>Order page ham</title>
    <!--<link rel="stylesheet" href="ham.css">-->

</head>
<body>
	
    <div class="container">
<h1>Welcome <?php echo $_SESSION['ulogin_name'] .$_COOKIE['mlogin']." !<br>" ?></h1>
    <?php /*echo $_SESSION['ulogin_name'];*/?>
				<div class="cute1" >
				<a href="cleaning.php?service=cleaning">
				<h2 style="text-decoration: none;"> Cleaning</h2></a>
				<p1> &nbsp&nbsp&nbspDomestic help for &nbsp&nbsp&nbspyour daily chores. </p1>

				</div>
				
				<div class="cute2">
					<a href="cooking.php?service=cooking">
					<h2> Cooking </h2></a>
					<br><br><br><br><p1> &nbsp&nbsp&nbsp&nbspAffordable <br> &nbsp&nbsp&nbsphome-cooked meals <br>&nbspfor your better &nbsphealth. </p1>
				</div>
				<div class="cute3">
					<a href="elderlycare.php?service=elderlycare">
					<h2> Elderlycare </h2></a>
					<p1> Caregivers who specialize in dementia care.</p1>
				</div>

				<div class="cute4">
					<a href="babysitting.php?service=babysitting">
					<h2>Babysitting</h2></a>
					<p1><center>Babysitters and japa for all your child-care needs.</center></p1>
				</div>
				<div class="cute5">
					<a href="nursing.php?service=nursing">
					<h2> Nursing </h2></a>
					<p1><center>&nbsp&nbsp&nbsp&nbspCaring Professional &nbsp&nbsp&nbsp&nbspNurses for patients &nbsp&nbsp&nbsp&nbspin need.</center></p1>
				</div>
			<a href="logout.php"type="button" value="logout" id="out">Logout</a>
	
</div>

    <img src="ham.png"  id="menuIcon"></div>

    <div class="menu-box" id="menuBox">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="result_for_user.php">Booking Schedule</a></li>
            <li><a href="ham.php">Services</a></li>
            <li><a href="about_us.php">About</a></li>
            <li><a href="contact_us.html">Contact Us</a></li>
        </ul>
    </div>

    <script>

        let menuBox = document.getElementById("menuBox");
        let menuIcon = document.getElementById("menuIcon");

        menuIcon.onclick = function(){
            menuBox.classList.toggle("open-menu");

            if(menuBox.classList.contains("open-menu")){
                menuIcon.src = "cross.png";
            }
            else{
                menuIcon.src = "ham.png";
            }
        }
    </script>


</body>
</html>
