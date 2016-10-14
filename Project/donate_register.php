	<?php

		$con=mysql_connect("localhost","root","unlockiT");
		$db=mysql_select_db("blood_connect");
		if ($conn->connect_error) {
  			  die("Connection failed: " . $conn->connect_error);
		} 
			$a=$_POST['uname'];
			$b=$_POST['email'];
			$c=$_POST['gen'];	
			$d=$_POST['place'];
			$e=$_POST['phno'];
			$f=$_POST['bgroup'];
			$dt=date("Y-m-d");
			$tym=date("h:i:sa");
			if($f=="Select" || $d=="Select")
				{
					header("location:donate.php?res=Select some value from the dropdown");
					exit();
	
	}
			
			$sql="insert into blood_bank (name,email,gender,addr,ph_no,blood_grp,dat,tim) values('$a','$b','$c','$d','$e','$f','$dt','$tym')";
			
			
			$res=mysql_query($sql);
			
				if($res)
				{
					
					$sql1="select * from blood_bank where email = '$b' and dat='$dt' and tim='$tym'";
					$res1=mysql_query($sql1);
					if($res1)
					{
						echo $sql1;	
						
						while($row=mysql_fetch_array($res1))
						{
							echo "nana";
							$id=$row['id'];
							$sql2="insert into adminrequest (cusid,request,email) values($id,'Donate blood of group ".$f."','$b')";
							echo "haha";
							echo $sql2;
							$res2=mysql_query($sql2);
							if($res2)
							{

								$act="Donate blood request";
								//$dt=date("Y-m-d");
								//$tym=date("h:i:sa");
								$sqllog="insert into activity (email,dat,tim,log) values('$b','$dt','$tym','$act')";
								echo $b;
								echo $sqllog;
								$reslog=mysql_query($sqllog);
								
								if($reslog)	
								echo "<script language='javascript'>window.location.href='donate.php?res=Donation request is submitted to the admin';</script>";
							}
							else 
							{
								echo "<script language='javascript'>window.location.href='donate.php?res=Donation request not submitted , try again!';</script>";	
								exit();
							}
						}
						
					}	
					else 
					{
						echo "<script language='javascript'>window.location.href='donate.php?res=Donation request not submitted , try again!';</script>";	
						exit();
					}
				}
				else 
					{
						echo "<script language='javascript'>window.location.href='donate.php?res=Donation request not submitted , try again!';</script>";	
						exit();
					}
?>
