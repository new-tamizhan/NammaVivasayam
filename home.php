
<!DOCTYPE html>
<html lang="en">
 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Welcome To Vegetables</title>
     
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
     
     <link rel="stylesheet" type="text/css" href="styles">
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
		<a href="#" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
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

				<script>
				    var image=document.getElementById("images");
					var img_array=["im1.jpg","im2.jpg","im3.jpg","im4.jpg","im55.jpg","im6.jpg","im7.jpg","im8.jpg","im9.jpg","im10.jpg"];
					var index=0;
					function slide(){
					document["images"].src=img_array[index];
					index++;
					if(index>=img_array.length){
						index=0;
				
					}}
					setInterval("slide()",3000);
					</script>
				
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-9">
	
    <img id="images" src="im1.jpg" width="100%" height="300px" name="image"/>
    
	</div>   

    <div class="col-sm-3">
      <marquee direction="up" height="300px" width="100%" style="border:solid"
	  onmouseover="this.stop()" onmouseout="this.start()" scrollamount="3">
	  <ul>
	  <li><h5 align="justify"><a href="#" target="_new">Farmer Registration Form.</a></h5></li>
      <hr style="margin-top:15px;">
	  
	  <li><h5 align="justify"><a href="#" target="_new">Direct sales from Farmers.</a></h5></li>
      <hr style="margin-top:15px;">
	  
	  <li><h5 align="justify"><a href="#" target="_new">You will definately get fresh good from formers.</a></h5></li>
      <hr style="margin-top:15px;">
	  
	  <li><h5 align="justify"><a href="#" target="_new">Bulk Order avilable Here.!.</a></h5></li>
      <hr style="margin-top:15px;">
	  
	  <li><h5 align="justify"><a href="help.php" target="_new">You Facing any problem From "NAMMA VIVASAYAM" contact help .</a></h5></li>
      <hr style="margin-top:15px;">
	  
	 </ul>
	 </marquee>


    </div>
  </div>
</div>
<br><br>				

<div>
<p><b>
Please help to Farmers.<br><br>


</b></p>
</div>
<br><br>								
				
<div class="footer">
  <p>&copy Copyright 2019.</br>
   Designed by SIVAA.
  </p>
</div>

</body>          
</html>