<!DOCTYPE html>
<html lang="en">
 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Flowers</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

     </head>   
<body>

<?php

//fetch_item.php

include('database_connection.php');

$query = "SELECT * FROM tbl_flowers ORDER BY id ASC";

$statement = $connect->prepare($query);

if($statement->execute())
{
	$result = $statement->fetchAll();
	$output = '';
	foreach($result as $row)
	{
		$output .= '
		
		<div class="text-center">
		<div class="col-md-3">  
			
			<img src="images/flowers/'.$row["image"].'" width="300" height= "300" class="img-rounded" />
            	<h4 class="text-info">'.$row["name"].'</h4>
            	<h4 class="text-danger">₹ '.$row["price"] .'  /Kg</h4>
            	<input type="text" name="quantity" id="quantity' . $row["id"] .'" class="form-control" value="1" />            								
				<a type="button" class="btn btn-success form-control"  style="margin-top:5px;" href="login.php"><center>Buy Now</center></a>
				</br></br></br>
	 
				</div>
        </div>
		';
	}
	echo $output;
}


?>
</body></html>