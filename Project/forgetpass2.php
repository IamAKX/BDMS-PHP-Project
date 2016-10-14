<?php
	session_start();
	

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


				<?php
					$con=mysql_connect("localhost","root","unlockiT");
					$db=mysql_select_db("blood_connect");
					$usr=$_POST['email'];
					
					
					$sql="select * from users where email = '".$usr."'";
					$res=mysql_query($sql);
						
					
					if($res)
					{

							$y="";
							if(mysql_num_rows($res)==0)
							{
									echo "<font color='red'><h2>No user registed with this email</h2></font>";
									echo "<a href='forgetpass.php'>Try again</a>";
							}
							while($row=mysql_fetch_array($res))
							{
								?>
									<h3>Change Password</h3>
								<form method="get" action="retrivepass.php">
								<table>
									<tr>
										<td>Re-enter email</td>
										<td><input type="text" name="email" requied></td>
									</tr>
									<tr>
										<td>New Password</td>
										<td><input type="password" name="cpass" requied></td>
									</tr>
									<tr>
										<td>Re-Type Password</td>
										<td><input type="password" name="cnfpass" requied></td>
									</tr>
									<tr>
										<td></td>
										<td><input type="submit" value="Change password"> </td>
									<tr>
								</table>
								</form>
								<?php
							}

							
							
								
					}
					
					
			?>

			</center>
		</div>
		
		<div id="footer">
			<h5>&copy; 2016 by Orchid Group of Web Applications</h5>
		</div>
	</body>
