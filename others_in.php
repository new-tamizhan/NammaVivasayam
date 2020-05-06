<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome To Others</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
    
     <link href="styles" rel="stylesheet" type="text/css">
     <script type="text/javascript" src="js/date_time.js"></script>
     </head>
<body>
    <div class="gtrans">
            <div id="google_translate_element"></div>
            <script>function googleTranslateElementInit() {
            new google.translate.TranslateElement({
            pageLanguage: 'en'
            }, 'google_translate_element');}
            </script><script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
          </div>



    <p align="right">
        Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
       </p>



         <span id="date_time" style="float: right"></span>
            <script type="text/javascript">window.onload = date_time('date_time');</script>
                                    
<marquee style="color:red;" direction="left" fontcolor="red" width="82%">
These are direct sales from Farmers ...!!
</marquee>

    <div class="header">               
      <img src="h.jpg" width="100%" height="200px" border="0px">
    </div>

    <div class="menu">
     <div class="btn-group btn-group-justified">

      <a href="home.php" class="btn btn-primary">
     <span class="glyphicon glyphicon-home"></span> Home</a>

     <div  class="btn-group">    
     <div  class="dropdown">      
		<a href="#" class="btn btn-primary" type="button" data-toggle="dropdown">
		Food Goods <span class="caret"></span></a>
		
			
    <ul class="dropdown-menu">
    <li><a href="vegetables_in.php">Vegetables</a></li>
    <li><a href="fruits_in.php">Fruits</a></li>
		<li><a href="roots_in.php">Roots and Tubers</a></li>		
		<li><a href="keerai_in.php">Spinach Types</a></li>
		<li><a href="flowers_in.php">Flowers</a></li>
		<li><a href="grains_in.php">Food Grains</a></li>
		<li><a href="oilseeds_in.php">OilSeeds</a></li>
        <div class="dropdown-divider"></div>
    <li><a href="others_in.php">Others</a></li>
    </ul></div></div>     

        <a href="farmer_reg.php" class="btn btn-primary">Farmers Registration</a>
		
		<a href="help.php" class="btn btn-primary">Help</a>
		<a href="feedback.php" class="btn btn-primary">FeedBack</a>
   
          <a href="login.php" class="btn btn-primary">
          <span class="glyphicon glyphicon-user"></span> Login & Signup
        </a>
 
      <a href="login.php" class="btn btn-primary">
      Cart <span class="glyphicon glyphicon-shopping-cart"></span>
        <span class="badge">0</span>
        ₹ <span class="total_price">0.00</span>
      </a>
        </div></div></br></br>

	<div id="display_item"></div>
	
	<div class="text-center">
<ul class="pagination pagination-lg">
  <li><a href="vegetables_in.php">1</a></li>
  <li><a href="fruits_in.php">2</a></li>
  <li><a href="roots_in.php">3</a></li>
  <li><a href="keerai_in.php">4</a></li>
  <li><a href="flowers_in.php">5</a></li>
  <li><a href="grains_in.php">6</a></li>
  <li><a href="oilseeds_in.php">7</a></li>
  <li class="active"><a href="others_in.php">8</a></li>
</ul></div>
</br></br>

<div class="footer">
  <p>&copy Copyright 2019.</br>
   Designed by SIVAA.
  </p>
</div>

</body>
</html>

<script>  
$(document).ready(function(){
	load_product();
	load_cart_data();    
	function load_product()
	{
		$.ajax({
			url:"fetch_others_in.php",
			method:"POST",
			success:function(data)
			{
				$('#display_item').html(data);
			}
		});
	}

	function load_cart_data()
	{
		$.ajax({
			url:"fetch_cart.php",
			method:"POST",
			dataType:"json",
			success:function(data)
			{
				$('#cart_details').html(data.cart_details);
				$('.total_price').html(data.total_price);
				$('.badge').text(data.total_item);
			}
		});
	}

	$('#cart-popover').popover({
		html : true,
        container: 'body',
        content:function(){
        	return $('#popover_content_wrapper').html();
        }
	});

	$(document).on('click', '.add_to_cart', function(){
		var product_id = $(this).attr("id");
		var product_name = $('#name'+product_id+'').val();
		var product_price = $('#price'+product_id+'').val();
		var product_quantity = $('#quantity'+product_id).val();
		var action = "add";
		if(product_quantity > 0)
		{
			$.ajax({
				url:"action.php",
				method:"POST",
				data:{product_id:product_id, product_name:product_name, product_price:product_price, product_quantity:product_quantity, action:action},
				success:function(data)
				{
					load_cart_data();
					alert("Item has been Added into Cart");
				}
			});
		}
		else
		{
			alert("lease Enter Number of Quantity");
		}
	});

	$(document).on('click', '.delete', function(){
		var product_id = $(this).attr("id");
		var action = 'remove';
		if(confirm("Are you sure you want to remove this product?"))
		{
			$.ajax({
				url:"action.php",
				method:"POST",
				data:{product_id:product_id, action:action},
				success:function()
				{
					load_cart_data();
					$('#cart-popover').popover('hide');
					alert("Item has been removed from Cart");
				}
			})
		}
		else
		{
			return false;
		}
	});

	$(document).on('click', '#clear_cart', function(){
		var action = 'empty';
		$.ajax({
			url:"action.php",
			method:"POST",
			data:{action:action},
			success:function()
			{
				load_cart_data();
				$('#cart-popover').popover('hide');
				alert("Your Cart has been clear");
			}
		});
	});
    
});

</script>