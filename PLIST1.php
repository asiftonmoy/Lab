<html>
 	<head>
  		<title>Equipment Lists</title>
 		
 		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
 		<link rel="stylesheet" type="text/css" href="inc\bootstrap\css\bootstrap.min.css">
		<script type="text/javascript" href="inc\bootstrap\jquery.min.js"></script>
		<script type="text/javascript" href="inc\bootstrap\js\bootstrap.min.js"></script>
 	</head> 
 	<body>
 			
		<div class="container">
			<h2 style="text-align: center;"><u>Programming Lab Equipment List</u></h2>
		</div>

						<?php 
//load database connection
    $host = "localhost";
    $user = "root";
    $password = "";
    $database_name = "lab";
    $joy =("mysql:host=$host;dbname=$database_name", $user, $password, array(
    ));
$search=$_POST['search'];
if (!empty($search)) {
  
$query = $joy("select * from lab where pname LIKE '%$search%' OR pIssueEquipment LIKE '%$search%' OR pEquipmentDetails LIKE '%$search%' LIMIT 0 , 10");
         if (!$query->rowCount() == 0) {
			    echo"<div style=\"text-align: center;\">";
		 		echo "<B><h2>Search found :</h2></B><br/>";
				echo "<div class=\"table-responsive\">";
                echo"<table class=\"table table-striped table-condensed\">";				
                echo "<tr><th style=\"text-align: left;\">Equipment Name</th><th style=\"text-align:left;\">Issue Equipment</th><th style=\"text-align:left;\">Equipment Details</th><th style=\"text-align:left;\">Date</th></tr>";				
            while ($results = $query->fetch()) {
				echo "</td><th style=\"text-align: left;\">";
                echo $results['pname'];
				echo "</td><th style=\"text-align: left;\">";
                echo $results['pIssueEquipment'];
				echo "</td><th style=\"text-align: left;\">";
                echo $results['pEquipmentDetails'];
				echo "</td><th style=\"text-align: left;\">";
                echo $results['paddr'];
				echo "</td></tr>";				
            }
				echo "</table>";		
        } else {
            echo"<div style=\"text-align: center;\">";
		 		echo "<B><h2>Nothing Found</h2></B> <br/>";
        }
}else{
  echo "<div class='alert alert-warning' style='text-align:center;'>Please type some keywords</div>";
}
?>
						
		
				    </tbody>
  				</table>
  			</div>
		</div>
	</body>
</html> 