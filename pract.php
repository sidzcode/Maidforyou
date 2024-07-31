<?php
include "connection.php";

//$query="select * from booking,category where booking.cid=category.cid and bid=$_POST['']";
$query = "select * from booking;";
echo $query;
$res=pg_query($con,$query);


while($row=pg_fetch_assoc($res))
{?>
<tr>	
	<td><?php echo $row['bid']; ?></td>
		
 	
	
</tr>
<?php 	
		
}

pg_close($conn);

?>


