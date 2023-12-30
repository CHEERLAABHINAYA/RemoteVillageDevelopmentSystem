<?php 
	$fullname=$_POST["fullname"];
	$username=$_POST["username"];
	$pwd=$_POST["lpassword"];
	$conn=mysqli_connect("127.0.0.1","root","","Signup");
	$sql="INSERT INTO signup VALUES('$fullname','$username','$pwd');";
	if(mysqli_query($conn,$sql)){
		echo "query";
		if(mkdir($fullname)){
			header("Location:home.html");
		
		}
	}
	else{
		echo "Error: ".$sql."<br>".mysqli_error($conn);
		echo "Byeee";
	}
?>

