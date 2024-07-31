<?php
session_start();
?>
<html>
    <head>
        <title> Maid Home Page</title>
        <style>
		   
body{ margin: 0;
    background-color: #F9F3EE;
}
.heading{
    font-family: 'Roboto', sans-serif;
    font-size: 30px;
    text-align: center;
    color: #BBB8B5;
}
table
{
    justify-content: center;
    align-items: center;
    margin-left: 12%;
    width: 1050px;
    padding: 5px;
    border-top: 1px solid #97938C;
    border-left: 1px solid#DCD9D3;
    border-right: 1px solid#DCD9D3;
}
table,tr,td{
    border-collapse: collapse;
    border: 1px solid #DCD9D3;
}
thead tr td{
   padding: 10px;
   color: #F5D406;
   font-size: 20px;
   font-family: 'Roboto', sans-serif;
   font-weight: 500;
}
thead tr .one{
    border-right:1px solid #F9F3EE ;
  
}
thead tr .two{
    border-right:1px solid #F9F3EE ;
  
}
thead tr .three{
    border-right:1px solid #F9F3EE ;
  
}
thead tr .four{
    border-right:1px solid #F9F3EE ;
  
}
thead tr .five{
    border-right:1px solid #F9F3EE ;
  
}
thead tr .six{
    border-right:1px solid #F9F3EE ;
  
}
thead tr .seven{
    border-right:1px solid #F9F3EE ;
  
}
thead tr .eight{
    border-right:1px solid #F9F3EE ;
  
}
thead tr .nine{
    border-right: 1px solid #DCD9D3;
  
}

tbody tr .one{
    border-right:1px solid #F9F3EE ;
  
}
tbody tr .two{
    border-right:1px solid #F9F3EE ;
  
}
tbody tr .three{
    border-right:1px solid #F9F3EE ;
  
}
tbody tr .four{
    border-right:1px solid #F9F3EE ;
  
}
tbody tr .five{
    border-right:1px solid #F9F3EE ;
  
}
tbody tr .six{
    border-right:1px solid #F9F3EE ;
  
}
tbody tr .seven{
    border-right:1px solid #F9F3EE ;
  
}
tbody tr .eight{
    border-right:1px solid #F9F3EE ;
  
}
tbody tr .nine{
    border-right: 1px solid #DCD9D3;
  
}

tbody tr td{
    padding: 10px;
    font-size: 15px;
    font-family: 'Roboto', sans-serif;
    font-weight: 400;
}
/*button{
background-color:#f2bb66;
color:#ff;
border*/


button{
	width: 150px;
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
	border:1px solid ;
	text-decoration: none;
	}
	/*button:hover{
    background-color: orangered;
    border: 2px solid #f9004d;
	color:white;
	opacity:0.8;
    cursor: pointer;}*/b
	</style>	
    </head>
    <body>
    <div class="create">
        <a href="postwork.php"><button type="button">Post your work</button></a>
    </div>
    <div class="heading">
       <p>View your Work Order <?php echo isset($_SESSION['mlogin']);?></p>
    </div>
    
       <table>
        <thead>
            <tr>
                <td class="one">#</td>
                <td class="two">Client Name</td>
                <td class="three">Client location</td>
                <td class="four">Work Date</td>
                <td class="five">Work Time</td>
                <td class="six">Work Duration</td>
                <td class="seven">Service</td>
                <td class="eight">Sub Service</td>
               
            </tr>
        </thead>
        <tbody>
            <?php
            include 'connection.php';
            $sql1="SELECT requirements.name,requirements.location,requirements.date,requirements.time,requirements.duration,requirements.service,requirements.subservice FROM requirements INNER JOIN maid_work ON maid_work.location=requirements.location" ;
            $result1=pg_query($con,$sql1);
             
            if($result1)
            {
                $sql2="SELECT requirements.name,requirements.location,requirements.date,requirements.time,requirements.duration,requirements.service,requirements.subservice FROM requirements INNER JOIN maid_work ON maid_work.date=requirements.date" ;
                $result2=pg_query($con,$sql2);
                if($result2)
                {
                    $sql3="SELECT requirements.name,requirements.location,requirements.date,requirements.time,requirements.duration,requirements.service,requirements.subservice FROM requirements INNER JOIN maid_work ON maid_work.time=requirements.time" ;
                    $result3=pg_query($con,$sql3); 
                    if($result3)
                    {
                        $sql4="SELECT requirements.name,requirements.location,requirements.date,requirements.time,requirements.duration,requirements.service,requirements.subservice FROM requirements INNER JOIN maid_work ON maid_work.duration=requirements.duration" ;
                        $result4=pg_query($con,$sql4);
                        if($result4)  
                        {
                            $sql5="SELECT requirements.name,requirements.location,requirements.date,requirements.time,requirements.duration,requirements.service,requirements.subservice FROM requirements INNER JOIN maid_work ON maid_work.service=requirements.service" ;
                            $result5=pg_query($con,$sql5);
                            if($result5)
                            {
                                $sql6="SELECT requirements.name,requirements.location,requirements.date,requirements.time,requirements.duration,requirements.service,requirements.subservice FROM requirements INNER JOIN maid_work ON maid_work.subservice=requirements.subservice" ;
                                $result6=pg_query($con,$sql6); 
                                if($result6)
                                {
                                    while($row=pg_fetch_assoc($result6))
                                    {
                                    echo'<tr>
                                        <td class="two"></td>
                                        <td class="two">'.$row['name'].'</td>
                                        <td class="three">'.$row['location'].'</td>
                                        <td class="four">'.$row['date'].'</td>
                                        <td class="five">'.$row['time'].'</td>
                                        <td class="six">'.$row['duration'].'</td>
                                        <td class="seven">'.$row['service'].'</td>
                                        <td class="eight">'.$row['subservice'].'</td>
                                      
                        
                                    </tr>';
                                    }
                                }
                            }
                        }
                    }
                }
            }
            else{
                echo "No match found";
            }
            
            ?>
        </tbody>
       </table>

       <a href="logout.php"><button type="button">Logout</button></a>
    

       <!-- <div class="containter">
        <div class="profile">
		<div class="welcome">
			<h2>Welcome <?php echo " " .$_COOKIE['mlogin']." !<br>" ?></h2>
		</div>	
            <div class="profile-image">
                <img src="2_avatar.jpg" alt="" width="150" height="130">
            </div><br><br>
            <input type="text" name="" placeholder="Name">
            <input type="number" name="" placeholder="Contact">
            <input type="textarea" name="" placeholder="Address"  rows="5" cols="30"><br>
            <label for="skils" id="skills">Skills</label>
            <select name="skills" id="skills" multiple>
                <option value="1">Cleaning</option>
                <option value="1">Cooking</option>
                <option value="1">Baby-sitting</option>
                <option value="1">Elderly Care</option>
                <option value="1">Nursing</option>
            </select><br><br>

            <button> Edit</button>
        </div>
        <div class="orders">
            <h3>orderssss</h3>
		<table>
        <thead>
            <tr>
                <td class="one">#</td>
                <td class="two">Service</td>
                <td class="three">Booking Date</td>
                <td class="four">Booked For</td>
                <td class="five">Status</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="one">1</td>
                <td class="two">Cleaning</td>
                <td class="three">01/04/2023</td>
                <td class="four">Home</td>
                <td class="five">Completed</td>
            </tr>
        </tbody>
       </table>
        </div>
       </div>  -->
    </body>
</html>
