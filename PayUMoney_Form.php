<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>


<?php
$MERCHANT_KEY = "n33OalvH";
$SALT = "HkBBLOGjva";
// Merchant Key and Salt as provided by Payu.

$surl="http://localhost:8080/demo%20cart/waste/New%20folder/success.php";
$furl="http://localhost:8080/demo%20cart/waste/New%20folder/failure.php";
$amount ='amount1';
$productinfo='productinfo1';

 //$PAYU_BASE_URL = "https://sandboxsecure.payu.in";		// For Sandbox Mode
$PAYU_BASE_URL = "https://secure.payu.in";			// For Production Mode

$action = '';

$posted = array();
if(!empty($_POST)) {
    //print_r($_POST);
  foreach($_POST as $key => $value) {    
    $posted[$key] = $value; 
	
  }
}

$formError = 0;

if(empty($posted['txnid'])) {
  // Generate random transaction id
  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} else {
  $txnid = $posted['txnid'];
}
$hash = '';
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if(empty($posted['hash']) && sizeof($posted) > 0) {
  if(
          empty($posted['key'])
          || empty($posted['txnid'])
          || empty($posted['amount'])
          || empty($posted['firstname'])
          || empty($posted['email'])
          || empty($posted['phone'])
          || empty($posted['productinfo'])
          || empty($posted['surl'])
          || empty($posted['furl'])
    		  || empty($posted['service_provider'])
  ) {
    $formError = 1;
  } else {
    //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
	$hashVarsSeq = explode('|', $hashSequence);
    $hash_string = '';	
	foreach($hashVarsSeq as $hash_var) {
      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
      $hash_string .= '|';
    }

    $hash_string .= $SALT;


    $hash = strtolower(hash('sha512', $hash_string));
    $action = $PAYU_BASE_URL . '/_payment';
  }
} elseif(!empty($posted['hash'])) {
  $hash = $posted['hash'];
  $action = $PAYU_BASE_URL . '/_payment';
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <script>
    var hash = '<?php echo $hash ?>';
    function submitPayuForm() {
      if(hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;
      payuForm.submit();
    }
  </script>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  </head>
  <body onload="submitPayuForm()">

      <p align="right">
        Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
       </p>

  <center><h1><b>Payment Gateway.</b></h1></center>
    <br/>
    <marquee direction="right" style="color:blue" behavior="alternate" SCROLLDELAY=200>
       Welcome To Payment Gateway System...!!
    </marquee>  
    
    <?php if($formError) { ?>
	
      <span style="color:red">Please fill all mandatory fields.</span>
      <br/>
      <br/>
    <?php } ?>
    <form action="<?php echo $action; ?>" method="post" name="payuForm">
      <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
      <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
      <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
      <table>
        <tr>
          <b>Mandatory Parameters: (Kindly fill all Details.)</b></br></br>
        </tr>
        <tr>
          <td>Amount: (₹)</td>
           
          <input type="hidden" id="amount1" name="amount" value="<?php echo (empty($posted['amount'])) ? '' : $posted['amount']; ?>"/>
        <td><span class="amount2">0.00</span></td></tr>
          <tr><td>Name: </td>
          <td><input name="firstname" id="firstname" value="<?php echo (empty($posted['firstname'])) ? '' : $posted['firstname']; ?>" /></td>
        </tr>
        <tr>
          <td>E-Mail Id: </td>
          <td><input name="email" id="email" value="<?php echo (empty($posted['email'])) ? '' : $posted['email']; ?>" /></td></tr>
          <tr><td>Contact No: </td>
          <td><input name="phone" value="<?php echo (empty($posted['phone'])) ? '' : $posted['phone']; ?>" /></td>
        </tr>
        <tr>
          <td>Goods Info: </td>
          <input type="hidden" id="productinfo1" name="productinfo" value="<?php echo (empty($posted['productinfo'])) ? '' : $posted['productinfo']; ?>" />

         <td><span class="badge">0</span>   Items.</td>
        </tr>
        <tr>          
          <td colspan="3"><input type="hidden" name="surl" value="<?php echo $surl ?>" size="64" /></td>
        </tr>
        <tr>          
          <td colspan="3"><input type="hidden" name="furl" value="<?php  echo $furl ?>" size="64" /></td>
        </tr>
        <tr>
          <td colspan="3"><input type="hidden" name="service_provider" value="payu_paisa" size="64" /></td>
        </tr>
        <tr>
          <?php if(!$hash) { ?>
            <td colspan="4"><input type="submit" value="Submit" /></td>
          <?php } ?>
          </tr>
      </table>
      </form><br/>
     <button onclick="location.href='welcome.php'">Cancel</button>
  </body>
</html>

<script>
$(document).ready(function(){
load_cart_data();
function load_cart_data()
{
  $.ajax({
    url:"fetch_cart.php",
    method:"POST",
    dataType:"json",
    success:function(data)
    {
     $('.amount2').html(data.total_price);
     $('.badge').text(data.total_item);
      $('#amount1').val(data.total_price);
      $('#productinfo1').val(data.total_item);
 
    }
  });
}
});
</script>
