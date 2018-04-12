<?php require('connection.php');?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Recover Record</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
 		<link rel="stylesheet" type="text/css" href="inc\bootstrap\css\bootstrap.min.css">
		<script type="text/javascript" href="inc\bootstrap\jquery.min.js"></script>
		<script type="text/javascript" href="inc\bootstrap\js\bootstrap.min.js"></script>
	</head> 
	<body>
		<div class="jumbotron bg-primary" style="margin-bottom: 0;">
 			<h2 style="text-align: center;">Lab Equipment Management System</h2>
 		</div>
		<!-- navbar -->
 		
		<nav class="container-fluid navbar navbar-inverse">
		
		    <ul class="nav navbar-nav navbar-center">
		      	<li><a href="plist.php">Programming Lab</a></li>
		     	<li><a href="#">Digital Electronics Lab</a></li>
		     	<li><a href="#">Network Lab</a></li>
		    </ul>
	
		</nav>	<!-- navbar closed -->

		<div class="container" style="margin-bottom: 5%;">
			<h2 style="text-align: center;"><u>Recover Record</u></h2>
		</div>

		<?php
			$rno=$_GET["rno"];	 
			mysql_query("update LAB set pshow='Y' where pno='$rno'");
		?>
		<div class="alert alert-success" style="text-align: center; margin: 0 20% auto;">
			<h4>Successfully Records Recovered</h4>
		</div>
		<div class="well well-sm" style="margin-top: 5%;">
			<h4 style="text-align: center;"><a href=plist.php>Continue...</a></h4>
		</div>
	</body>
</html>