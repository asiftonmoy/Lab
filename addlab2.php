<?php require('connection.php');?>
<html>
 	<head>
	  	<title>Add New Record</title>
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
		     	<li><a href="lab2.php">Digital Electronics Lab</a></li>
		     	<li><a href="lab3.php">Network Lab</a></li>
		    </ul>
	
		</nav>	
		
		

 		<div class="container" style="width: 60%; margin: 0 auto;">
 			<div class="panel panel-default">
	      		<div class="panel-heading"><h3 style="text-align: center;">New Equipment</h3></div>
	      		<div class="panel-body">
	      			<form action="lab2save.php" method="post" name="fdadd">
	      				<div class="form-group">
							<label for="name">Equipment Name</label>
							<input type="text" id="name" name="name" class="form-control">
						</div>

						<div class="form-group">
							<label for="Issue Equipment">Issue Equipment</label><br>
							<input type="radio" id="IssueEquipment" name="IssueEquipment" value="Teacher"> <b>Teacher</b><br>
							<input type="radio" id="IssueEquipment" name="IssueEquipment" value="Student"> <b>Student</b><br>
							<input type="radio" id="IssueEquipment" name="IssueEquipment" value="None"><b> None</b>
						</div>

						<div class="form-group">
							<label for="Equipment Details">Equipment Details</label>
							<input type="text" id="EquipmentDetails" name="EquipmentDetails" class="form-control">
						</div>

						<div class="form-group">
							<label for="addr">Date</label>
							<input type="text" id="addr" name="addr" class="form-control">
						</div>

						<div style="text-align: center;">
							<input type="submit" class="btn btn-info" name="submit" value="Submit">
						</div>
						
	      			</form>
	      		</div>
    		</div>	
 		</div>
		
	</body>
</html>