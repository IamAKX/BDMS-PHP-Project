<!DOCTYPE html>
<html>
<head>
	<title>Blood Connect - Stock</title>
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
						<br>
					</font>
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
			<h3>Blood Available in Stock</h3>
				<table cellspacing="5"  >
					<tr bgcolor="#cdcdcd" id="tablehead">
						<th style="padding:1px 30px;">Group</th>
						<th style="padding:1px 30px;">Bottles</th>
					</tr>
					
					
					<?php
					
						  
						$con=mysql_connect("localhost","root","unlockiT");
						$db=mysql_select_db("blood_connect");
						$sql="select * from stock";
						$res=mysql_query($sql);
						if($res)
						{
							while($row=mysql_fetch_array($res))
							{
								//echo "<tr><td>";
								/*if($row['bgroup']=="Ap")
									echo "A<sup>+</sup>";
								else
									if($row['bgroup']=="An")
									echo "A<sup>-</sup>";
								else
									if($row['bgroup']=="Bp")
									echo "B<sup>+</sup>";
								else
									if($row['bgroup']=="Bn")
									echo "B<sup>-</sup>";
								else
									if($row['bgroup']=="Op")
									echo "O<sup>+</sup>";
								else
									if($row['bgroup']=="On")
									echo "O<sup>-</sup>";
								else
									if($row['bgroup']=="ABp")
									echo "AB<sup>+</sup>";
								else
									if($row['bgroup']=="ABn")
									echo "AB<sup>-</sup>";*/
								//echo "</td>";
								//echo "<td>$row['bottle']</td>"
								//echo "</tr>";	
								echo "<tr align='center'>";
										//<td>".$row['bgroup']."</td>
								switch ($row['bgroup']) {
								    case "Ap":
								    	echo "<td>A<sup>+</sup></td>";
								        break;
							        case "An":
							    		echo "<td>A<sup>-</sup></td>";
							        break;
							        case "Bp":
							    		echo "<td>B<sup>+</sup></td>";
							        break;
							        case "Bn":
							    		echo "<td>B<sup>-</sup></td>";
							        break;
							        case "Op":
								    	echo "<td>O<sup>+</sup></td>";
							        break;
							        case "On":
							    		echo "<td>O<sup>-</sup></td>";
							        break;
							        case "ABp":
							    		echo "<td>AB<sup>+</sup></td>";
							        break;
							        case "ABn":
							    		echo "<td>AB<sup>-</sup></td>";
							        break;
								    
								} 
										echo "<td>".$row['bottle']."</td>
										
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
