
<!DOCTYPE html>
<html lang="en">
 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Welcome To Fruits</title>
     
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
     
     <link href="styles" rel="stylesheet" type="text/css">
     <script type="text/javascript" src="js/date_time.js"></script>
     
     <script>  
 
$(document).ready(function(){
	load_product();   
	function load_product()
	{
		$.ajax({
			url:"fetch_fruits.php",
			method:"POST",
			success:function(data)
			{
				$('#display_item').html(data);
			}
		});
	}		    
});</script>


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
    <li><a href="vegetables.php">Vegetables</a></li>
    <li><a href="fruits.php">Fruits</a></li>
		<li><a href="roots.php">Roots and Tubers</a></li>		
		<li><a href="keerai.php">Spinach Types</a></li>
		<li><a href="flowers.php">Flowers</a></li>
		<li><a href="grains.php">Food Grains</a></li>
		<li><a href="oilseeds.php">OilSeeds</a></li>
        <div class="dropdown-divider"></div>
    <li><a href="others.php">Others</a></li>
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
        </div></div></br> 
     <div id="display_item"></div>
				
                <div class="text-center">
                <ul class="pagination pagination-lg">
                  <li><a href="vegetables.php">1</a></li>
                  <li class="active"><a href="fruits.php">2</a></li>
                  <li><a href="roots.php">3</a></li>
                  <li><a href="keerai.php">4</a></li>
                  <li><a href="flowers.php">5</a></li>
                  <li><a href="grains.php">6</a></li>
                  <li><a href="oilseeds.php">7</a></li>
                  <li><a href="others.php">8</a></li>
                </ul></div>
                </br></br>

<div class="footer">
  <p>&copy Copyright 2019.</br>
   Designed by SIVAA.
  </p>
</div>

</body>          
</html>