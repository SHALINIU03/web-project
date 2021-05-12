<?php
$con=mysqli_connect("localhost","root","","shalini");
if(!$con)
{
	die("could not connect:".mysqli_connect_error());
}
echo "connected successfully"."<br>";

$Name1=$_POST["name"];
$Email1=$_POST["email"];
$Subject1=$_POST["subject"];
$Message1=$_POST["message"];

$query="INSERT INTO contact1(Name,Email,Subject,Message) VALUES('$Name1','$Email1','$Subject1','$Message1')";
if (mysqli_query($con,$query)){
	echo "Record inserted";
}
else{
	echo "Not inserted row";
}


?>