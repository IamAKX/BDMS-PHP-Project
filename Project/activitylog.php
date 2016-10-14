	<?php

		$con=mysql_connect("localhost","root","unlockiT");
		$db=mysql_select_db("blood_connect");
		if ($conn->connect_error) {
  			  die("Connection failed: " . $conn->connect_error);
		} 
			$act=$_GET['act'];
			$dest=$_GET['dest'];
			$dt=date("Y-m-d");
			$tym=date("h:i:sa");
			$sql="insert into activity (dat,tim,log) values('$dt','$tim','$act')";
			
			
			$res=mysql_query($sql);
			
				if($res)
				{
					
					echo "<script language='javascript'>window.location.href='index.php?res=You are registered successfully';</script>";
				}
				else 
					echo "<script language='javascript'>window.location.href='index.php?res=Registration Unsuccessful, try again';</script>";	
?>
