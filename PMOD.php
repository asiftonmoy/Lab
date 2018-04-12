<?php require('connection.php');?>
<html>
<head>
	<meta charset="utf-8">
	<title>Save Records</title>
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

	<div class="panel panel-primary" style="margin: 0 10% auto;">
	    <div class="panel-heading" style="text-align: center;">
	    	<h4>Edit Programming Lab Equipment Details</h4>
	    </div>
	    <div class="panel-body">
<?php
	$rnooo=trim($_GET["rno"]);
	$rs1=mysql_query("SELECT * from LAB where pno='".$rnooo."'");
	$sno=1;
	while ($row=mysql_fetch_array($rs1)) {
?>

      		<form action="pupdate.php" name="fpmod" method="post">
		        <div class="form-group">
		          <label for="1">Equipment Name</label>
		          <input type="text" name="name" id="1" value="<?php echo $row[1]; ?>" class="form-control">
		        </div>
		        <div class="form-group">
		          <label for="2">Issue Equipment</label>
		          <input type="text" name="IssueEquipment" id="2" value="<?php echo $row[2]; ?>" class="form-control">
		        </div>
				<div class="form-group">
		          <label for="3">Equipment Details</label>
		          <input type="text" name="EquipmentDetails" id="3" value="<?php echo $row[3]; ?>" class="form-control">
		        </div>
				 <div class="form-group">
		          <label for="4">Date</label>
		          <input type="text" name="addr" id="4" value="<?php echo $row[4]; ?>" class="form-control">
		        </div>
		        <div class="form-group" style="text-align: center;">
		        	<input type="hidden" name="rno" value="<?php echo $rnooo; ?>">
		        	<input type="submit" name="submit" value="Submit" class="btn btn-primary">
		        </div>    
			</form>
<?php		
		$sno++;
	}
	if ($sno==1) {
		echo "<div class='alert alert-danger' style='text-align:center;'>Records Not Found</div>";
	}
?>
      	</div>
    </div>
</body>
</html> 