

<?php

$name=$_POST['name'];
$fname=$_POST['fname'];
$age=$_POST['age'];
$address=$_POST['address'];
$pin=$_POST['pin'];
$landmark=$_POST['landmark'];
$district=$_POST['district'];
$state=$_POST['state'];
$contact=$_POST['contact'];
$goods=$_POST['goods'];
$others=$_POST['others'];


$link=new mysqli("localhost","root","","test");
if($link===false)
{
die("ERROR:could not connect.".mysqli_connect_error());
}
//mysqli_select_db("test");
$query="INSERT INTO farmer_reg(name,fname,age,address,pin,landmark,district,state,contact,goods,others)VALUES('$name','$fname','$age','$address','$pin','$landmark','$district','$state','$contact','$goods','$others')";

if($link->query($query)===TRUE)
{
echo"Your Data's Submitted successfully.   Thank you for Your Registraction...!";
}
else
{
echo "ERROR:Could not able to execute ".$query."<br>".$link.error;


}
$link->close();
?>
