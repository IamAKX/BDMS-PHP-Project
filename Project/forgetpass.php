<?php
	session_start();
	$_SESSION['usrnm']=$_SESSION['usrnm'];

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
		#container {

			margin-top: 10px;
 			 max-height: 100%;
 			 overflow-y: auto;

		}
	</style>
	<?php
			if(isset($_GET['res']))
			{
				echo "<script type='text/javascript'>alert('".$_GET['res']."');</script>";
			}
		?>
	
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
			
		</div>
		
		<div id="container">
				<center>
				<br><br>
					<h3>Forget Password</h3>
					
						<form action="forgetpass2.php" method="post">
						<table>
							<tr>
								<td>E-mail </td>
								<td> : </td>
								<td><input type="type" name="email"></td>
							</tr>
							
							
						</table>
						<br>
						<input type="submit" value="Update Password" style="width:310px">
						</form>
					
				</center>
		</div>
		
		<div id="footer">
			<h5>&copy; 2016 by Orchid Group of Web Applications</h5>
		</div>
	</body>
