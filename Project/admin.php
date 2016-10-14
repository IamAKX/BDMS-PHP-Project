<?php  
	session_start();
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
		#menu ul li a{
			font-weight: bold;
		}
		li{
			//margin-right: 4px;
			border-right: 1px solid #cdcdcd;
		}
		a{
			color: black;
			text-decoration:none;
			
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
		#container table
		{
			margin-left: 50px;
			margin-right: 50px;
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
		function reject(btnid)
		{
			cusid=btnid.substring(1);
			//alert(cusid);
			window.location.href='delfeedback.php?id='+cusid;
		

		}
		function reply(btnid)
		{
			window.open("http://www.gmail.com");
			cusid=btnid.substring(1);
			//alert(cusid);
			window.location.href='delfeedback.php?id='+cusid;
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
				<font size="2px">
						<b><i>ADMIN PANEL</i></b>
					</font>
					<br>
					<br>
				&nbsp&nbsp&nbsp<a href="changepass.php">Change Password</a>
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
			<h3>User's Feedback</h3>
					
					<?php
					
						  
						$con=mysql_connect("localhost","root","unlockiT");
						$db=mysql_select_db("blood_connect");
						$sql="select * from feedback";
						$res=mysql_query($sql);
						if($res)
						{
							if(mysql_num_rows($res)==0)
								{
									echo "<br><br><font color='#cdcdcd' size='5px'><i>No feedbacks yet...</i></font>";
									exit();
								}
							 echo "<table cellspacing='5' cellpadding='3' >
								<tr id='tablehead'>
									<th>Customer Name</th>
									<th>Customer Email</th>
									
									<th style='width:600px;'>Feeback</th>
									<th>Date</th>
									<th>Time</th>
									<th colspan='2' >Action</th>
								</tr>";
				
							
							
							while($row=mysql_fetch_array($res))
							{
								echo "<tr>
										<td>".$row['name']."</td>
										<td>".$row['email']."</td>
										<td>".$row['feedback']."</td>
										<td>".$row['dat']."</td>
										<td>".$row['tim']."</td>
										<td style='background-color:green'><input type='submit' value='Reply' id='b".$row[id]."' onclick='reply(this.id)' data-toggle='modal' data-target='#myModal'></td>
										<td style='background-color:#EF2929'><input type='submit' value='Reject' id='b".$row[id]."' onclick='reject(this.id)'></td>
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
