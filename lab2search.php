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
			<h2 style="text-align: center;"><u> Digital Electronics Lab Equipment List</u></h2>
		</div>

						<?php 
//load database connection
    $host = "localhost";
    $user = "root";
    $password = "";
    $database_name = "lab";
    $pdo = new PDO("mysql:host=$host;dbname=$database_name", $user, $password, array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ));
// Search from MySQL database table
$search=$_POST['search'];
if (!empty($search)) {

$query = $pdo->prepare("select * from lab2 where lab2name LIKE '%$search%' OR lab2IssueEquip LIKE '%$search%' OR lab2EquipDetails LIKE '%$search%' LIMIT 0 , 10");
$query->bindValue(1, "%$search%", PDO::PARAM_STR);
$query->execute();
// Display search result
         if (!$query->rowCount() == 0) {
		 		echo"<div style=\"text-align: center;\">";
		 		echo "<B><h2>Search found :</h2></B><br/>";
				echo "<div class=\"table-responsive\">";
                echo"<table class=\"table table-striped table-condensed\">";				
                echo "<tr><th style=\"text-align: left;\">Equipment Name</th><th style=\"text-align:left;\">Issue Equipment</th><th style=\"text-align:left;\">Equipment Details</th><th style=\"text-align:left;\">Date</th></tr>";				
            while ($results = $query->fetch()) {
				echo "</td><th style=\"text-align: left;\">";
                echo $results['lab2name'];
				echo "</td><th style=\"text-align: left;\">";
                echo $results['lab2IssueEquip'];
				echo "</td><th style=\"text-align: left;\">";
                echo $results['lab2EquipDetails'];
				echo "</td><th style=\"text-align: left;\">";
                echo $results['lab2addr'];
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