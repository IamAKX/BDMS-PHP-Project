		<?php
				$con=mysql_connect("localhost","root","unlockiT");
				$db=mysql_select_db("blood_connect");
				
				$cid=$_GET['id'];
				$sql="delete from users where id = ".$cid." and type != 'admin'" ;
				
			
				$res=mysql_query($sql);
			
				if($res)
				 header("location:users.php?token=User Deleted Successfully!");
				else
				 header("location:users.php?token=Error occured during deletion!");
				
			?>
