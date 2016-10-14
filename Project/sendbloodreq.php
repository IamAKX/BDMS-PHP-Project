<?php
		$a=$_GET['grp'];
		$con=mysql_connect("localhost","root","unlockiT");
		$db=mysql_select_db("blood_connect");
		if ($conn->connect_error) {
  			  die("Connection failed: " . $conn->connect_error);
		} 
		

		$x="akx.sonu@gmail.com";
		$dt=date("Y-m-d");
		$tym=date("h:i:sa");
		$act="Request for blood group " .$a;
		$sqllog="insert into activity (email,dat,tim,log) values('$x','$dt','$tym','$act')";
		$reslog=mysql_query($sqllog);

		mail($x,"Request for Blood Group ".$a,"Please Contact the user if you are willing to donate the blood.\n\nThis email is send by Blood Connect and not the requesting users. Don't reply to this mail, contact the use directly here : ".$a);
		
		header('location:search.php?res=Your requests has been mailed to the user');
?>