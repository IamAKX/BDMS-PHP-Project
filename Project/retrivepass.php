		<?php
				$con=mysql_connect("localhost","root","unlockiT");
				$db=mysql_select_db("blood_connect");
				
				$email=$_GET['email'];
				$pass=$_GET['cpass'];
				$sql="update users set pass = '$pass' where email = '$email'" ;
				
			
				$res=mysql_query($sql);
			
				if($res)
				 header("location:index.php?res=Password changed!");
				else
				 header("location:forgetpass2.php?res=Could not change password, try again");
				
			?>

