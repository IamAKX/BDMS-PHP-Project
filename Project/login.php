<?php
		session_start();		
		$_SESSION['usrnm']="";
		$con=mysql_connect("localhost","root","unlockiT");
		$db=mysql_select_db("blood_connect");
		$usr=$_POST['logemail'];
		$psw=$_POST['logpass'];
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
		
		
		$sql="select * from users where email = '".$usr."' and pass = '".$psw."'";
		$res=mysql_query($sql);
			
		
		if($res)
		{

				$y="";
				if(mysql_num_rows($res)==0)
				{
						header('location:index.php?res=Wrong email or password');
						exit();
				}
				while($row=mysql_fetch_array($res))
				{
					$y=$row['name'];
					$_SESSION['usrnm']=$y;
					$_SESSION['usrid']=$row['id'];
					if($row['type']=="admin")
						header('location:admin.php');
					else
						header('location:home.php');
				}

				
				
					
		}
		
		
?>