<!DOCTYPE html>
<html>
<head>
	
		<?php
			if(isset($_GET['res']))
			{
				echo "<script type='text/javascript'>alert('".$_GET['res']."');</script>";
			}
		?>
	
	<title>Blood Connect</title>
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
		#login{

			float: right;
			margin-right: 30px;
		}
		a{
			text-decoration:none;

		}
		a:hover{
			color: red;
			font-weight: bold;
			//text-shadow: 2px 2px gray;
		}
		#regbtn{
			width: 250px;	
			height: 35px;
			background:linear-gradient(white,#EF2929);
		}	
		
		#footer
		{
			padding-left: 50px;
			margin:0px -6px 0px -6px;
		}
		#maincontainer
		{
			margin:0px -6px 0px -6px;
			background-image: url(images/bg.png);		
			box-shadow: 2px 5px 5px #cdcdcd;
		}
		#container
		{
			background-color:white;
			margin:40px 250px;
			border-left: 1px solid #cdcdcd;			
			border-right: 1px solid #cdcdcd;			
		}
	</style>

	<script language='javascript'>
	function chk()
	{
		a=document.reg.nme.value;
		b=document.reg.email.value;
		c=document.reg.pwd.value;
		d=document.reg.repwd.value;
		e=document.reg.day.value;
		f=document.reg.month.value;
		g=document.reg.year.value;
		h=document.reg.bgroup.value;
		i=document.reg.place.value;
		
		
		var expr1=/^[a-zA-Z]+$/;
		var expr3=/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

		
	 if(c.length<6 && c.length>18)
		{
			alert("password must be between 6 to 18 characters");
			return false;
		}
		else if(!b.match(expr3)) 
		{
		alert("email is not in proper format");
		return false;
		}
		else if(d!=c){
			alert("password mismatch!");
			return false;
					}
		else 
			return true;
	}

	</script>
</head>
	<body>
		<div id="header">
			<div id="title">
				<h1><img src="images/appicon.png" width="40" height="40">
				<font>Blood <font color="red"> Connect</font></font></h1>
			</div>
			<div id="login">
				<form id="loginform" name="loginform" method="post"  action="login.php">
					<input type="text" name="logemail" placeholder="E-mail" required><br>
					<input type="password" name="logpass" placeholder="Password" required><br>
					<input type="submit" name="logbtn" value="Log In">
					<a href="forgetpass.php"><i><font size="2dp">Forgotten password?</font></i></a>
				</form>
			</div>
		</div>
		
		<div id="maincontainer">
		
		<div id="container">

			<center>
				<h3>Register</h3>
				<font color="red"><h5><i>*All fields are mandatory, do not leave blanck</i></h5></font>

				<form name="reg" method="post" action="register.php" onsubmit="return chk()">
					<table>
						<tr>
							<td size="200">Name</td>
							<td size="14"> : </td>
							<td size="300"><input type="text" name="nme" required></td>
						</tr>
						<tr>
							<td>E-mail</td>
							<td> : </td>
							<td><input type="text" name="email" required></td>
							<td><font size="1dp" color="gray"><i>Use this email to login in future</i></font></td>
						</tr>
						<tr>
							<td>Password</td>
							<td> : </td>
							<td><input type="password" name="pwd" required></td>
							<td><font size="1dp" color="gray"><i>6-18 character containing upper case, lower case,<br>digit and special character.</i></font></td>
						</tr>
						<tr>
							<td>Retype Password</td>
							<td> : </td>
							<td><input type="password" name="repwd" required></td>
							<td><font size="1dp" color="gray"><i>Same as previous one</i></font></td>
						</tr>
						<tr>
							<td>Date of Birth</td>
							<td> : </td>
							<td colspan="=2">
								<select name="day">
									<option>Day</option>
									<?php
										for($i=1;$i<=31;$i++)
											echo "<option value='$i'> $i </option>";
									?>
								</select>
								<select name="month">
									<option>Month</option>
									<?php
										for($i=1;$i<=12;$i++)
											echo "<option value='$i'> $i </option>";
									?>
								</select>
								<select name="year">
									<option>Year</option>
									<?php
										for($i=1990;$i<=2010;$i++)
											echo "<option value='$i'> $i </option>";
									?>
								</select>
							</td>
							
						</tr>
						<tr>
							<td>Blood Group</td>
							<td>:</td>
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
						<tr>
							<td>Place</td>
							<td> : </td>
							<td>
								<select name="place">
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
							<td></td>
							<td><input type="checkbox" name="agree" required=""></td>
							<td colspan="2">
								<font size="1dp"> &nbspBy clicking Register button you agree <br>our <a href="#">Terms and Condition</a> and <a href="#">Privacy Policy</a>.</font>
							</td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td><input id="regbtn" type="submit" name="regbtn" value="Register"></td>
						</tr>
					</table>
					<br>
				</form>
			</center>
		</div>	
		
		</div>
		
		<div id="footer">
			<font size="2dp" color="gray"><i>&copy; 2016 by Orchid Group of Web Applications</i></font>
		</div>
	</body>
