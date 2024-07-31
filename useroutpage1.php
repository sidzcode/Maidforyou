<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Useroutpage</title>
        <link rel="stylesheet" type="text/css" href="userop.css">
    </head>
    <body>
        
        <header>
            <h1>This maid is Maidforyou.</h1>
        </header>
        <div class="container">
                
            <div class="left">
         <div class="md"> &nbsp&nbsp&nbsp&nbsp<br><h2>MAID DETAILS</h2><br><br><br></div>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>Name:-</b><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>Contact:-</b><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>Skills:-</b><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>Experience:-</b><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>Date:-</b><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>Time:-</b>

            </div>
            
            <div class="right"> <img src="2_avatar.jpg" alt="Avatar">
            </div><br>
        </div>
        <!-- <h2 id="pay">Payment for the service will be:-</h2> -->
            <form>
                <table>
                    <td><input type="submit" onclick="location.href='ham.html'" name="" value="Back to home page"/></td>
			<button type="submit" onclick="location.href='ham.html'" class="submit-btn">LOGIN</button>
                    
                </table>
          </form>
    </body>
</html>
<?php
	include "connection.php";

	$query = "select mname,mcontact,mskills,mexp,bdate,btime from maid,booking,user1 where "
?>
