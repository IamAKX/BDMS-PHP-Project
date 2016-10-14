<?php  
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Blood Connect - User</title>
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
		tr:nth-child(odd)
		{
			background-color: #E9B96E;
		}
		tr:nth-child(even)
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
		function del(btnid)
		{
			cusid=btnid.substring(1);
			//alert(cusid);
			window.location.href='deluser.php?id='+cusid;
		

		}
	</script>
	<?php
			if(isset($_GET['token']))
			{
				echo "<script type='text/javascript'>alert('".$_GET['token']."');</script>";
			}
	?>
</head>
	<body>
		<div id="header">
			<div id="title">
				<h1><img src="images/appicon.png" width="40" height="40">
				<font>Blood <font color="red"> Connect</font></font></h1>
			</div>
			<div id="logout">
				<font size="2px">
						<b><i>ADMIN PANEL</i></b>
					</font>
					<br>
				
					<br>
				<input id="logoutbtn" type="submit" name="logoutBtn" value="Log Out" onclick="logmeout()">
			</div>
		</div>
		<div id="menu">
			<ul>
				<li style="border-left:1px solid #cdcdcd;"><a href="admin.php">&nbsp&nbsp&nbsp&nbsp&nbspHome&nbsp&nbsp&nbsp&nbsp&nbsp</a></li>
				<li><a href="stock.php">&nbsp&nbsp&nbsp&nbsp&nbspStock&nbsp&nbsp&nbsp&nbsp&nbsp</a></li>
				<li><a href="request.php">&nbsp&nbsp&nbsp&nbsp&nbspRequest&nbsp&nbsp&nbsp&nbsp&nbsp</a></li>
				<li><a href="users.php">&nbsp&nbsp&nbsp&nbsp&nbspUsers&nbsp&nbsp&nbsp&nbsp&nbsp</a></li>
			</ul>
		</div>
		<div id="container">

			<center>
						<?php  
						$con=mysql_connect("localhost","root","unlockiT");
						$db=mysql_select_db("blood_connect");
						$sql="select * from users where type != 'admin'";
						$res=mysql_query($sql);
						if($res)
						{

							if(mysql_num_rows($res)==0)
								{
									echo "<br><br><font color='#cdcdcd' size='5px'><i>No Users</i></font>";
									exit();
								}

							echo "<h3>User' Requests</h3>
							<table cellspacing='5' cellpadding='3' >
								<tr id='tablehead' bgcolor='#cdcdcd'>
									<th>Customer Id</th>
									<th>Name</th>
									<th>E-mail</th>
									<th>Date Of Birth</th>
									<th>Place</th>
									<th>Blood Group</th>
									
									<th >Action</th>
								</tr>";

							while($row=mysql_fetch_array($res))
							{
								echo "<tr>
										<td>".$row['id']."</td>
										<td>".$row['name']."</td>
										<td>".$row['email']."</td>
										<td>".$row['dob']."</td>
										<td>".$row['place']."</td>
										<td>".$row['bgroup']."</td>
										<td><input type='submit' value='Delete' id='b".$row[id]."' onclick='del(this.id)'></td>
									  </tr>";			
							}
					
						}
					?>
				</table>
		</center>

		</div>
		
		<div id="footer">
			<h5>&copy; 2016 by Orchid Group of Web Applications</h5>
		</div>
	</body>
