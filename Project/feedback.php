<?php
	session_start();
	//print_r($_SESSION);
?>
<!DOCTYPE html>
<html>
<head>
	
		<?php
			if(isset($_GET['res']))
			{
				echo "<script type='text/javascript'>alert('".$_GET['res']."');</script>";
			}
		?>
	<title>Blood Connect - Feedback</title>
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
		textarea
		{
			resize:none;
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
			<h2>Submit feedback</h2>
			
			<div style="border:2px solid gray;width:450px;height:380px;">
				<form action="sendfeedback.php" method="post">
					<center>
						<table>
							<tr>
								<td>Name</td>
								<td><input type="text" name="name" required></td>
							</tr>
							<tr>
								<td>Email</td>
								<td><input type="text" name="email" required></td>
							</tr>
							<tr>
								<td>Feedback</td>
							</tr>
							<tr>
							<td colspan="2"><textarea name="textarea" rows="11" cols="42" required></textarea></td>
							<br>
							</tr>
						</table>
						<br><br>
				<input type="submit" value="Submit">
					</center>
				</form>
			</div>
		</center>
		</div>
		
		<div id="footer">
			<h5>&copy; 2016 by Orchid Group of Web Applications</h5>
		</div>
	</body>
