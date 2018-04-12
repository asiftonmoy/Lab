<?php require('connection.php');?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Equipment delete Records</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
 		<link rel="stylesheet" type="text/css" href="inc\bootstrap\css\bootstrap.min.css">
		<script type="text/javascript" href="inc\bootstrap\jquery.min.js"></script>
		<script type="text/javascript" href="inc\bootstrap\js\bootstrap.min.js"></script>
	</head> 
	<body>
		<div class="jumbotron bg-primary" style="margin-bottom: 0;">
 			<h2 style="text-align: center;">Lab Equipment Management System</h2>
 		</div>
		
 		
		<nav class="container-fluid navbar navbar-inverse">
		
		    <ul class="nav navbar-nav navbar-center">
		      	<li><a href="plist.php">Programming Lab</a></li>
		     	<li><a href="#">Digital Electronics Lab</a></li>
		     	<li><a href="#">Network Lab</a></li>
		    </ul>
	
		</nav>	

		<div class="container">
			<h2 style="text-align: center;"><u>Programming Lab Equipment List</u></h2>
		</div>

		<div class="container">
			<h3><a href="padd.php">Add New Record</a></h3>
		</div>
		<div class="container">
			<div class="table-responsive">
				<table class="table table-striped table-condensed">
					<thead>
						<tr>
					        <th style="text-align: left;">Serial No</th>
							<th style="text-align: left;">Equipment Name</th>
							<th style="text-align: left;">Issue Equipment</th>
							<th style="text-align:left;">Equipment Details</th>
							<th style="text-align: left;">Options</th>
				    	</tr>
					</thead>
					<tbody>
					<?php

							$todel=$_GET['rno'];
							mysql_query("update LAB SET pshow='N' where pno='$todel' ;");
							$rs1=mysql_query("SELECT * from LAB where pshow='Y' order by
							pname;");
							$sno=1;
							while( $row=mysql_fetch_array($rs1)) {
							 echo "<tr><td>$sno</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td><a
							href=pmod.php?rno=".$row[0].">Modify</a> | <a
							href=pdel.php?rno=".$row[0].">Delete</a></td></tr>";
							 $sno++;
							}
							if ($sno==1) echo "<tr><td align=center><font size=4 color=red>Records
							Not Found</font></td></tr>";
					?>	
					</tbody>  	
	  			</table>
  			</div>
		</div>
		<div class="container">
			<hr>
		</div>

		<div class="container">
				<h3>Deleted Records</h3>
		</div>
		<div class="container">
			<div class="table-responsive">
				<table class="table table-striped table-condensed">
					<thead>
						<tr>
					        <th style="text-align: left;">Serial No</th>
							<th style="text-align: left;">Equipment Name</th>
							<th style="text-align: left;">Issue Equipment</th>
							<th style="text-align:left;">Equipment Details</th>
							<th style="text-align: left;">Date</th>
							<th style="text-align: left;">Options</th>
				    	</tr>
					</thead>
					<tbody>
					<?php
							$rs2=mysql_query("SELECT * from LAB where pshow='N' order by
							pname;");
							$sno=1;
							while( $row=mysql_fetch_array($rs2)) {
							 echo "<tr><td>$sno</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td><a
							href=pundel.php?rno=".$row[0].">Recover</a></td></tr>";
							 $sno++;
							}
							if ($sno==1) echo "<tr><td align=center><font size=4 color=red>Records
							Not Found</font></td></tr>";
					?>	
					</tbody>
	  			</table>
  			</div>
		</div>
	</body>
</html> 