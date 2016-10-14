<?php

		$con=mysql_connect("localhost","root","unlockiT");
		$db=mysql_select_db("blood_connect");
		$a=$_POST['name'];
		$b=$_POST['email'];
		$c=$_POST['textarea'];
					
		$dt=date("Y-m-d");
		$tym=date("h:i:sa");
		$act="Feedback sent to the Admin";
		$sqllog="insert into activity (email,dat,tim,log) values('$b','$dt','$tym','$act')";
		echo $b;
		echo $sqllog;
		$reslog=mysql_query($sqllog);
		
		$sql="insert into feedback (name,email,feedback,dat,tim) values('$a','$b','$c','$dt','$tym')";
			$res=mysql_query($sql);
					
				if($res)
				{
					echo"<br><h1>You are Registered!!!</h1>";

					echo "<script language='javascript'>window.location.href='feedback.php?res=Feedback submitted successfully';</script>";
				}
				else 
					echo "<script language='javascript'>window.location.href='feedback.php?res=Feedback not submitted, try again';</script>";	

		//header('location:feedback.php');
?>