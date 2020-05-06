
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome To Flowers</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    
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

<marquee style="color:red;" direction="left" fontcolor="red" width="78%">
These are direct sales from Farmers ...!!
</marquee>

         <span id="date_time" style="float: right"></span>
            <script type="text/javascript">window.onload = date_time('date_time');</script>
                                    


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




<h2>Farmer's Registration Form.</h2>
<p>If you would like to sell your agricultural products through "NAMMA VIVASAYAM.", fill out the form at below !.</p><br>


<p style="color:red;">* 2% commission for "NAMMA VIVASAYAM"</p><br>


<div class="container">
  <form action="farmer_datas.php" method="post">
  
  <fieldset>
    <legend>Farmer Informations:</legend>
	<table>
	<tr><td>
    Name:</td><td>
    <input style="width:99%" type="text" name="name" value="">
    </td></tr>
	<tr><td>
    Father Name:<br></td><td>
    <input style="width:99%" type="text" name="fname" value="">
    </td></tr>

	<tr><td>
    Age:<br></td><td>
    <input style="width:99%" type="text" name="age" value="">
    </td></tr>

	<tr><td>
    Address:<br></td><td>
    <textarea id="address" name="address" placeholder="Write your Address.. " rows="4" cols="50"></textarea>
    </td></tr>
	
<tr><td>
    PIN code:<br></td><td>
    <input style="width:99%" type="text" name="pin" value="">
    </td></tr>

	<tr><td>
    Landmarks:<br></td><td>
    <input style="width:99%" type="text" name="landmark" value="">
    </td></tr>
	
	<tr><td>
    District:<br></td><td>
    <input style="width:99%" type="text" name="district" value="">
    </td></tr>
	
	<tr><td>
    State:<br></td><td>
    <input style="width:99%" type="text" name="state" value="">
    </td></tr>

	<tr><td>
    Contact No:<br></td><td>
    <input style="width:99%" type="text" name="contact" value="">
    </td></tr>

	<tr><td>
    Sales Goods:<br></td><td>
    <textarea id="sgoods" name="goods" placeholder="Write your Name of sales Goods.. " rows="4" cols="50"></textarea>
    </td></tr>

	<tr><td>
    Others:<br></td><td>
    <textarea id="others" name="others" placeholder="Write something.. " rows="4" cols="50"></textarea>
    </td></tr>

	<tr><td>
    <input type="submit" value="Submit.">
	</td>
	
	</tr>
	</table>
  </fieldset>
</form><br>
<button onclick="location.href='home.php'">Cancel</button>
</div>
<br><br><br>
<div class="footer">
  <p>&copy Copyright 2019.</br>
   Designed by SIVAA.
  </p>
</div>

</body>
</html>
