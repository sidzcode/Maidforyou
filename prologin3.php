<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="prologin2.css">
    <body>
        <div class="loginbox">
            <img src="avatarlog.jpg" class="avatar">
            <h1>Maid for you</h1>
            <form action="prologin2.php" method="POST">
                <p>Username</p>
                <input type="text" name="usern">
                <p>Password</p>
                <input type="password" name="pass">
                <input type="submit" name="" value="Login">
               
               <a href="#">Forget Password?</a>
               &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
               &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<br>
            <a href="merge1.php">Visiting first time?</a>
            </form>
            


        </div>
    </body>
</head>

</html>
<?php
	include "connection.php";

	if($con)
	{
		$u=$_POST['usern'];
		$p=$_POST['pass'];
		$loggedin=0;
		$c=0;
	
	//$uid=5;

	//$q="insert into user1(ulogin_name,upwd) values('$u','$p')";
		$q=pg_query("select * from user1 where ulogin_name='$u' and upwd='$p'");
		$res=pg_execute($con,$q);
	
		while($row=pg_fetch_assoc($q))
		{
			$c=$c+1;
		}
		if($c==1)
		{
			$log=1;
			session_start();
			$_SESSION['ulogin_name']=$u;
			$_SESSION['log']=true;
			header("location: ham1.html");
			$log=1;
		}
		else
		{
			$loggedin=1;
		}
	}
	else
	{
		echo "Connection failed";
	}
		/*echo $q;
	
	$res=pg_query($con,$q);
	if(!res)
		echo"NO insertion";
	else
		echo"values inserted";*/
?>
