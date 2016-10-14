<!DOCTYPE html>
<html>
<head>
		<?php
			if(isset($_GET['res']))
			{
				echo "<script type='text/javascript'>alert('".$_GET['res']."');</script>";
			}
		?>
	<title>Blood Connect - Donate</title>
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
		<center>
			<h5><font color="red"><i>*Fill this form to request for blood donation<br>*All fields are mandatory</i></font></h5>
			<div>
				<form name="reg" method="post" action="donate_register.php">
					<table>
						<tr>
							<td size="200">Name</td>
							<td size="14"> : </td>
							<td size="300"><input type="text" name="uname" size="30" required></td>
						</tr>
						<tr>
							<td>E-mail</td>
							<td> : </td>
							<td><input type="text" name="email" size="30" required></td>
						</tr>
						<tr>
							<td>Gender</td>
							<td> : </td>
							<td><input type="radio" name="gen" required value="Male">Male
							<input type="radio" name="gen" required value="Female">Female</td>
						</tr>
						<tr>
							<td>Address</td>
							<td> : </td>
							<td>
								<select name="place" required>
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
							</td>
						</tr>
						<tr>
							<td>Phone no</td>
							<td> : </td>
							<td><input type="text" name="phno" size="30" required></td>
						</tr>
						<tr>
							<td>Blood Group</td>
							<td> : </td>
							<td>
								<select name="bgroup">
									<option>Select</option>
									<option value="A+">A<sup>+</sup></option>
									<option value="A-">A<sup>-</sup></option>
									<option value="B+">B<sup>+</sup></option>
									<option value="B-">B<sup>-</sup></option>
									<option value="O+">O<sup>+</sup></option>
									<option value="O-">O<sup>-</sup></option>
									<option value="AB+">AB<sup>+</sup></option>
									<option value="AB-">AB<sup>-</sup></option>
								</select>
							</td>
						</tr>
						<br>
						<tr>
						<td></td>
						<td></td>
						<td><input type="submit" id="donate" value="donate blood"></td>
						</tr>
					</table>
				</form>
		</center>
		</div>
		
		<div id="footer">
			<h5>&copy; 2016 by Orchid Group of Web Applications</h5>
		</div>
	</body>
