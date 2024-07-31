<html>

<head>
   
    <link rel="stylesheet" href="bookings.css">
    <title>Aditi</title>
</head>
<body>
    
    <div class="heading">
       <p>View your booking details, make changes and complete payment</p>
    </div>
    
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
   


<?php

include "connection.php";

//$query="select * from booking,category where booking.cid=category.cid and bid=$_POST['']";
$query = "select bid, csubtype, bdate,btime from booking,category where booking.bid=category.cno and ctype='cleaning';";

$res=pg_query($con,$query);

echo "<table>";

while($row=pg_fetch_assoc($res))
{
	
   echo "<tr>";
		?>
		<td><?php echo $row['bid']; ?></td>
		<td><?php echo $row['csubtype']; ?></td>
		<td><?php echo $row['bdate']; ?></td>
		<td><?php echo $row['btime']; ?></td>
 	<?php 
	 echo "</tr>";
	
		
}
 echo "</table>";
pg_close($conn);

?>
</body>
</html>


