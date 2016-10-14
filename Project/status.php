<!DOCTYPE html>
<html>
<head>
	<title>Blood Connect - Status</title>
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
			height: 450px;
			border-bottom: 2px solid #cdcdcd;
			margin:0px -6px 0px -6px;
			
		}
		#inner {

			margin: 10px 50px 0px 50px;
 			 max-height: 100%;
 			 overflow-y: auto;

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
		
			<div id="inner">
			

				<?php
				$con=mysql_connect("localhost","root","unlockiT");
				$db=mysql_select_db("blood_connect");
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				} 
		
		
				$sql="select a.id,a.cusid,request,dat,tim,status from blood_bank b,adminrequest a where a.email=b.email";
				$res=mysql_query($sql);
				
		
				if($res)
				{

									
						if(mysql_num_rows($res)==0)
						{
							echo "<br><br><font color='#cdcdcd'><i>Status of all your request will be displayed here,<br>i.e., Accepted,Rejected or Pending..</i></font>";
							exit();
						}
						$c=0;
						while($row=mysql_fetch_array($res))
						{
								
								$c++;
								echo "&nbsp&nbsp&nbsp&nbsp&nbsp<h3>".$c.". ".$row['request']."</h3>";
								echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCustomer ID : <i>".$row['cusid']."</i><br>";
								echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbspRequest ID : <i>".$row['id']."</i><br>";
								echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbspDate : <i>".$row['dat']."</i><br>";
								echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbspTime : <i>".$row['tim']."</i><br>";
								
								if($row['status']=="Allow")
									echo "<b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspStatus  : </b><font color='green'><i>".$row['status']."</i></font><br>";
								else
									if($row['status']=="Pending")
										echo "<b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspStatus  : </b><font color='Orange'><i>".$row['status']."</i></font><br>";
									else
										if($row['status']=="Reject")
											echo "<b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspStatus  : </b><font color='red'><i>".$row['status']."</i></font><br>";
								echo "<hr><br>";		
						}
								$b="akx.sonu@gmail.com";
								$dt=date("Y-m-d");
								$tym=date("h:i:sa");
								$act="Checked status of the request";
								$sqllog="insert into activity (email,dat,tim,log) values('$b','$dt','$tym','$act')";
								
								$reslog=mysql_query($sqllog);
							
				}
			?>
		
			</div>
		</div>
		
		<div id="footer">
			<h5>&copy; 2016 by Orchid Group of Web Applications</h5>
		</div>
	</body>
