	<?php

		$con=mysql_connect("localhost","root","unlockiT");
		$db=mysql_select_db("blood_connect");
		if ($conn->connect_error) {
  			  die("Connection failed: " . $conn->connect_error);
		} 
			$a=$_POST['nme'];
			$b=$_POST['email'];
			$c=$_POST['pwd'];	
			$d=$_POST['day'];
			$m=$_POST['month'];
			$y=$_POST['year'];
			$dob=$y."-".$m."-".$d;
			$e=$_POST['place'];
			$f=$_POST['bgroup'];
			if($d=="00" || $m=="00" || $y=="00" || $e=="Select" || $f=="Selec")
				{
					header("location:index.php?res=Select some value from the dropdown");
					exit();
				}
			
			$sql="insert into users (name,email,pass,dob,place,bgroup) values('$a','$b','$c','$dob','$e','$f')";
			
			
			$res=mysql_query($sql);
			
				if($res)
				{
					echo"<br><h1>You are Registered!!!</h1>";

					echo "<script language='javascript'>window.location.href='index.php?res=You are registered successfully';</script>";
				}
				else 
					echo "<script language='javascript'>window.location.href='index.php?res=Registration Unsuccessful, try again';</script>";	
?>
