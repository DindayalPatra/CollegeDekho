<?php
$servername ="localhost";
$username ="root";
$password = "";
$dbname ="collegedekho";
$conn = new mysqli($servername,$username,$password,$dbname);
if(!$conn)
	echo "connection failed";
else
	echo "connection established";

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['password']; 

if(isset($_POST['submit']))
	{
	   if(empty($_POST['fname'])||empty($_POST['lname'])||empty($_POST['email'])||empty($_POST['password']))
	   {
		   header("location:signup.html?Empty=please fill all the fields");
	   }
	}
	$q = "insert into signup(fname,lname,email,password)values($fname,$lname,$email,$password)"
	mysqli_query($conn,$q);
	$s = "insert into signin(email,password)values($email,$password)";
	mysqli_query($conn,$s);
	$conn->close();
}
?>