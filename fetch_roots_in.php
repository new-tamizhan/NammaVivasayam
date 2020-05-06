
<!DOCTYPE html>
<html lang="en">
 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Roots and Tubers</title>

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

     </head>   
<body>

<?php

//fetch_item.php

include('database_connection.php');

$query = "SELECT * FROM tbl_roots ORDER BY id ASC";

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
			
			<img src="images/roots/'.$row["image"].'" width="300" height= "300" class="img-rounded" />
            	<h4 class="text-info">'.$row["name"].'</h4>
            	<h4 class="text-danger">₹ '.$row["price"] .'  /Kg</h4>
            	<input type="text" name="quantity" id="quantity' . $row["id"] .'" class="form-control" value="1" />
            	<input type="hidden" name="hidden_name" id="name'.$row["id"].'" value="'.$row["name"].'" />
            	<input type="hidden" name="hidden_price" id="price'.$row["id"].'" value="'.$row["price"].'" />
            	<input type="button" name="add_to_cart" id="'.$row["id"].'" style="margin-top:5px;" class="btn btn-success form-control add_to_cart" value="Add to Cart" /></br></br></br>
	 
				</div>
        </div>
		';
	}
	echo $output;
}
?>
</body></html>
