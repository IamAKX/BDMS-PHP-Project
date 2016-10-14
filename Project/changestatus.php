<?php
	$id=$_GET['id'];
	$s=$_GET['status'];	
	$r=$_GET['req'];
	$grp=$_GET['grp'];
	$stk=0;
	echo $r;
	echo $r;
	
	$con=mysql_connect("localhost","root","unlockiT");
		$db=mysql_select_db("blood_connect");
	
		$sql ="update blood_bank set status='$s' where id=$id";	

		$res=mysql_query($sql);
			
		echo $sql;
		if($res && ($s=="Allow" || $s=="Reject"))
		{
					$sql0 = "update adminrequest set cnf = 1 where cusid = $id";
					echo $sql0;
					$res0=mysql_query($sql0);
			
		}
		if($res && $s=="Allow")
		{
			$sql1 = "select * from stock where bgroup = '".$grp."'";
			echo $sql1;
	
				$res1=mysql_query($sql1);
				
				
				if($res1)
				{

						while($row=mysql_fetch_array($res1))
						{
							$stk=(int)$row['bottle'];
								
						}	

						echo $stk;	
				}


				if($r=="Donate")
				{
					$stk++;
					$sql2 = "update stock set bottle = $stk where bgroup = '$grp'";
					echo $sql2;
					$res2=mysql_query($sql2);
					echo $res;
					echo $stk;
					echo $sql2;
				}
				else if($r=="Request")
				{
					$stk--;
					$sql2 = "update stock set bottle = $stk where bgroup = '$grp'";
					$res2=mysql_query($sql2);
				}



		
			
		}

		else 
			{
				echo "<script language='javascript'>window.location.href='request.php?res=Status was not updated, try again';</script>";
			}
				echo "<script language='javascript'>window.location.href='request.php?res=Status updated successfully';</script>";	


?>
