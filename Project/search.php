<!DOCTYPE html>
<html>
<head>

		<?php
			if(isset($_GET['res']))
			{
				echo "<script type='text/javascript'>alert('".$_GET['res']."');</script>";
			}
		?>
	<title>Blood Connect - Search</title>
	<style type="text/css">
		#header{
			margin:-6px -6px 0px -6px;
			float: top;
			padding: 10px 45px;
			height: 90px;
			box-shadow: 2px 5px 5px #cdcdcd;
		}
		#title{

			float: left;
			margin-left:50px ;
			
		}
		#logout{

			float: right;
			margin-right: 30px;
		}
		a{
			text-decoration:none;

		}
		a:hover{
			color: red;
			font-weight: bolder;
			
		}
			
		
		#footer
		{
			padding-left: 50px;
			margin:0px -6px 0px -6px;
		}
		#logoutbtn
		{
			float: right;
			color: white;
			background-color: red;
			font-weight: bold;
		}
		#menu{
			padding: 5px;
			float: bottom;
		}
		li{
			//margin-right: 4px;
			border-right: 1px solid #cdcdcd;
		}
		a{
			color: black;
			text-decoration:none;
			font-weight: bold;
		}
		ul li{
			display: inline;
		}
		a:hover{
			color: red;
			
		}
		ul li:hover
		{
			box-shadow: 0px 0px 8px red;
		}
		#container
		{
			height: 120px;
			border-bottom: 2px solid #cdcdcd;
			margin:0px -6px 0px -6px;

		}
		#innercontainer
		{
			height: 200px;
			overflow-y: auto;
		}
		#tr2:nth-child(odd)
		{
			background-color: #E9B96E;
		}
		#tr2:nth-child(even)
		{
			background-color: #EDAB41;
		}
		#tablehead
		{
			background-color: #cdcdcd;
		}

	</style>
	<script language="javascript">
		function logmeout()
		{
			<?php
				session_destroy();
			?>
			window.location.href="index.php";
		}
		function sendreq(g)
		{
			window.location.href="sendbloodreq.php?grp="+g;
		}
		
		function visibilityChange(x)
		{
			
			myelement = document.getElementById(x);
		
			
			if(myelement.disabled==true )
				myelement.disabled=false;
			else
				myelement.disabled=true;
		}
	</script>

</head>
	<body>
		<div id="header">
			<div id="title">
				<h1><img src="images/appicon.png" width="40" height="40">
				<font>Blood <font color="red"> Connect</font></font></h1>
			</div>
			<div id="logout">
				<br>
				
				<input id="logoutbtn" type="submit" name="logoutBtn" value="Log Out" onclick="logmeout()">
			</div>
		</div>
		<div id="menu">
			<ul>
				<li style="border-left:1px solid #cdcdcd;"><a href="home.php">&nbsp&nbsp&nbsp&nbsp&nbspHome&nbsp&nbsp&nbsp&nbsp&nbsp</a></li>
				<li><a href="donate.php">&nbsp&nbsp&nbsp&nbsp&nbspDonate&nbsp&nbsp&nbsp&nbsp&nbsp</a></li>
				<li><a href="status.php">&nbsp&nbsp&nbsp&nbsp&nbspStatus&nbsp&nbsp&nbsp&nbsp&nbsp</a></li>
				<li><a href="search.php">&nbsp&nbsp&nbsp&nbsp&nbspSearch&nbsp&nbsp&nbsp&nbsp&nbsp</a></li>
				<li><a href="feedback.php">&nbsp&nbsp&nbsp&nbsp&nbspFeedback&nbsp&nbsp&nbsp&nbsp&nbsp</a></li>
			</ul>
		</div>
		
		
		
		
		<div id="container" >
		<br>
			<form name="f1" method="post">
			
			<div>
			<div style="float:left;width:50%;">
			<center>
				Select Blood group:
				<select name="bgroup">
						<option>A<sup>+</sup></option>	
						<option>A<sup>-</sup></option>	
						<option>B<sup>+</sup></option>	
						<option>B<sup>-</sup></option>	
						<option>O<sup>+</sup></option>	
						<option>O<sup>-</sup></option>	
						<option>AB<sup>+</sup></option>	
						<option>AB<sup>-</sup></option>	

					</select><br><br>
				</center>
				</div>
				<div style="float:right;width:50%;margin:auto">

				
				<input id="ch1" type="checkbox" name="check1" onchange="visibilityChange('name')">Search by name:
				<input type="text" name="name" id="name" disabled>
				<br>
				
				<input id="ch2" type="checkbox" name="check2" onchange="visibilityChange('place')">Search by place:
	
					<select name="place" id="place" disabled>
									<option>Select</option>
									<option value="Kolkata">Kolkata</option>
									<option value="Delhi">Delhi</option>
									<option value="Mumbai">Mumbai</option>
									<option value="Chennai">Chennai</option>
									<option value="Bangalore">Bangalore</option>
									<option value="Goa">Goa</option>
									<option value="Bokaro">Bokaro</option>
									<option value="Patna">Patna</option>
									<option value="Lucknow">Lucknow</option>
									<option value="Bhopal">Bhopal</option>
									<option value="Jaipur">Jaipur</option>
					</select>
					
			</div>
			<div>
			<center>
				<input type="submit" value="Search" name="search" style="width:220px;">
				</center>
				</div>
			</div>
				
			
			</form>
			<br>
				</div>
			<div id="innercontainer" style="height:350px;border-bottom:2px solid #cdcdcd;">
			
		
			<?php
			
				if(isset($_POST['search']))
					
				{
					
					$con=mysql_connect("localhost","root","unlockiT");
					$db=mysql_select_db("blood_connect");
					$a=$_POST['bgroup'];
					$b=$_POST['name'];
					$c=$_POST['place'];
					$x="akx.sonu@gmail.com";			
					$dt=date("Y-m-d");
					$tym=date("h:i:sa");
					$act="Searched for blood group " .$a;
					$sqllog="insert into activity (email,dat,tim,log) values('$x','$dt','$tym','$act')";
					$reslog=mysql_query($sqllog);
					
					if(isset($_POST['check1']))
					{
						$sql="select * from blood_bank where blood_grp='$a' and name='$b'";
					
					}
					
					else if(isset($_POST['check2']))
					{
						$sql="select * from blood_bank where blood_grp='$a' and addr='$c'";
					
					}
					
					else if(isset($_POST['check1'] )&& isset($_POST['check2']))
					{
						$sql="select * from blood_bank where blood_grp='$a' and name='$b' and addr='$c'";
					
					}
					else
					$sql="select * from blood_bank where blood_grp='$a'";
						$res=mysql_query($sql);
						
						
						
						
								
							if($res)
							{
									$flag=0;
									echo "<center>";
									
									echo "<h3 bgcolor:#cdcdcd><i>Search Result :</i></h3>";
									echo "<table  cellspacing='5' cellpadding='3'>";
									
									echo "<tr id='tablehead'>";
									echo "<th>Name</th>";
									echo "<th>Email</td>";
									echo "<th>Gender</th>";
									echo "<th>Place</th>";
									echo "<th>Phone No.</th>";
									echo "<th>Action</th>";
									echo "</tr>";
									
									while($row=mysql_fetch_array($res))
									{
										$u=$row['name'];
										$v=$row['email'];
										$w=$row['gender'];
										$y=$row['addr'];
										$z=$row['ph_no'];
										
										
										echo"<tr id='tr2'>";
										echo "<td>".$u."</td>";
										echo "<td>".$v."</td>";
										echo "<td>".$w."</td>";
										echo "<td>".$y."</td>";
								
										echo "<td>".$z."</td>";
										
										echo "<td><form action='sendbloodreq.php? method='get'><input type='submit' value='Request'>
										<input type='hidden' name='grp' value='$a'></form></td>";
										echo "</tr>";
										$flag=1;
									}
									echo "</table>";
									echo "</center>";
							}
							
							if($flag==0)
								echo "<center><br> <font color='red'>NOT FOUND</font></center>";	
						
					
				}
			?>

	
		</div>

		
		<div id="footer">
			<h5>&copy; 2016 by Orchid Group of Web Applications</h5>
		</div>
	</body>
