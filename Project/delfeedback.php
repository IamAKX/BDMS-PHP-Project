		<?php
				$con=mysql_connect("localhost","root","unlockiT");
				$db=mysql_select_db("blood_connect");
				
				$cid=$_GET['id'];
				$sql="delete from feedback where id = ".$cid;
				
			
				$res=mysql_query($sql);
			
				if($res)
				 //header("location:admin.php?token=Feedback rejected Successfully!");
					echo "<script language='javascript'>window.location.href='admin.php?token=Feedback rejected Successfully!';</script>";
				else
				 //header("location:admin.php?token=Error occured during deletion!");
				echo "<script language='javascript'>window.location.href='admin.php?token=Error occured during deletion!';</script>";
			?>
