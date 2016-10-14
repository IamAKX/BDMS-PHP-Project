<?php
	session_start();

	//print_r($_SESSION);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Blood Connect - Home</title>
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
			font-weight: bold;
			color: black;
			text-decoration:none;
			font-size: 7sp;			
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
			height: 450px;
			border-bottom: 2px solid #cdcdcd;
			margin:0px -6px 0px -6px;
		}
		#container {

			margin-top: 10px;
 			 max-height: 100%;
 			 overflow-y: auto;

		}
		tr:nth-child(odd)
		{
			background-color: #AD7FA8;
		}
		tr:nth-child(even)
		{
			background-color: #729FCF;
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
						
					<br>
				&nbsp&nbsp&nbsp<a href="changepass.php">Change Password</a>
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
		<div id="container">
				<center>
				
				<h3>Your Recent Activities</h3>
					
						<?php

						$con=mysql_connect("localhost","root","unlockiT");
						$db=mysql_select_db("blood_connect");
					
						$sql="select * from activity";
						
						
						$res=mysql_query($sql);
					

						if($res)
						{
							
							if(mysql_num_rows($res)==0)
								{
										echo "<br><br><font color='#cdcdcd' size='10'><i>No recent activity logged.</i></font>";
									exit();
								}
								echo "<table cellpadding='9' cellpadding='5'><tr id='tablehead'><th>Date</th><th>Time</th><th>Activity</th></tr>";	
								while($row=mysql_fetch_array($res))
								{
									echo "<tr>
										<td>".$row['dat']."</td>
										<td>".$row['tim']."</td>
										<td>".$row['log']."</td>
									</tr>";
								}
								echo "</table>";
						}
					?>					

				</center>
		</div>
		
		<div id="footer">
			<h5>&copy; 2016 by Orchid Group of Web Applications</h5>
		</div>
	</body>
