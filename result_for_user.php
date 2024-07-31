<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="result_for_user.css">
    <title>Aditi</title>
</head>
<body>
    
    <div class="heading">
       <p>View maids according to your requirements</p>
    </div>
    
       <table>
        <thead>
            <tr>
                <td class="one">#</td>
                <td class="two">Maid Name</td>
                <td class="three">Maid Area</td>
                <td class="four">Maid Contact</td>
                <td class="five">Maid Time</td>
                <td class="six">Duration</td>
                <td class="seven">Service</td>
                <td class="eight">Sub Service</td>
		<td class="eight">Contact</td>
            </tr>
        </thead>
        <tbody>
        <?php
            include 'connection.php';
            $sql1="SELECT maid_work.name,maid_work.location,maid_work.date,maid_work.time,maid_work.duration,maid_work.service,maid_work.subservice FROM maid_work INNER JOIN requirements ON maid_work.location=requirements.location" ;
            $result1=pg_query($con,$sql1);
             
            if($result1)
            {
                $sql2="SELECT requirements.name,requirements.location,maid_work.date,maid_work.time,maid_work.duration,maid_work.service,maid_work.subservice FROM maid_work INNER JOIN requirements ON maid_work.date=requirements.date" ;
                $result2=pg_query($con,$sql2);
                if($result2)
                {
                    $sql3="SELECT maid_work.name,maid_work.location,maid_work.date,maid_work.time,maid_work.duration,maid_work.service,maid_work.subservice FROM maid_work INNER JOIN requirements ON maid_work.time=requirements.time" ;
                    $result3=pg_query($con,$sql3); 
                    if($result3)
                    {
                        $sql4="SELECT maid_work.name,maid_work.location,maid_work.date,maid_work.time,maid_work.duration,maid_work.service,maid_work.subservice FROM maid_work INNER JOIN requirements ON maid_work.duration=requirements.duration" ;
                        $result4=pg_query($con,$sql4);
                        if($result4)  
                        {
                            $sql5="SELECT maid_work.name,maid_work.location,maid_work.date,maid_work.time,maid_work.duration,maid_work.service,maid_work.subservice FROM maid_work INNER JOIN requirements ON maid_work.service=requirements.service" ;
                            $result5=pg_query($con,$sql5);
                            if($result5)
                            {
                                $sql6="SELECT maid_work.name,maid_work.location,maid_work.date,maid_work.time,maid_work.duration,maid_work.service,maid_work.subservice FROM maid_work INNER JOIN requirements ON maid_work.subservice=requirements.subservice" ;
                                $result6=pg_query($con,$sql6); 
                                if($result6)
                                {
					/*$sql7 = "SELECT mcontact from maid,maid_work where maid_work.name = maid.mname";
					$result7 = pg_query($con,$sql7);*/
                                    while($row=pg_fetch_assoc($result6) && $row1=pg_fetch_assoc($result7))
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

       <a href="ham.php"><button type="button">Go back to home page</button></a>
   

</body>
</html>
