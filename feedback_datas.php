

<?php

$name=$_POST['name'];
$contact=$_POST['contact'];
$comment=$_POST['comment'];

$link=new mysqli("localhost","root","","test");
if($link===false)
{
die("ERROR:could not connect.".mysqli_connect_error());
}
//mysqli_select_db("test");
$query="INSERT INTO feedback(name,contact,comment)VALUES('$name','$contact','$comment')";

if($link->query($query)===TRUE)
{
echo"Your FeedBack Submitted successfully.  Thank you...! for Your feedbacks...!!";
}
else
{
echo "ERROR:Could not able to execute ".$query."<br>".$link.error;


}
$link->close();
?>
