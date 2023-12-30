<html>
<head>
<title>Problem is recorded</title>
</head>
<body style="background-image:url(p2.jpg);background-position:center;background-repeat:no-repeat;background-size:cover;height=100%;">
<br><br><br><br><br>
<marquee direction="left" style="color:brown;"><h2>problem is successfully recorded</h2></marquee>
<?php 
include 'connection.php';
$pname=mysqli_real_escape_string($connection,$_POST['pname']);
$page=mysqli_real_escape_string($connection,$_POST['page']);
$ppass=mysqli_real_escape_string($connection,$_POST['ppass']);
$pphno=mysqli_real_escape_string($connection,$_POST['pphno']);
$pemail=mysqli_real_escape_string($connection,$_POST['pemail']);
/*$name=$_POST['pname'];
$age=$_POST['page'];
$pass=$_POST['ppass'];
$phno=$_POST['pphno'];
$email=$_POST['pemail'];*/
/*if($connection)
{
	echo "connection established"."<br>";
}
else
{
	echo "error:".mysqli_error($connection);
}*/
/*$query1="CREATE TABLE UserDetails(UserName VARCHAR(30) NOT NULL,Age INT NOT NULL,Problem VARCHAR(100) NOT NULL,PhoneNumber VARCHAR(20) NOT NULL,Email VARCHAR(50) NOT NULL);";
if(mysqli_query($connection,$query1))
{
	echo "table created"."<br>";
}
else
{
	echo "table not created.<br>";
	echo "error:".mysqli_error($connection);
}*/
$query2="INSERT INTO UserDetails VALUES('$pname','$page','$ppass','$pphno','$pemail');";
if (mysqli_query($connection,$query2))
{
    echo "";
}
else
{
    echo "record not inserted.<br>";
    echo "error:".mysqli_error($connection);
}
/*$query3="SELECT * FROM PassengerDetails;";
$check=mysqli_query($connection,$query3);
if(mysqli_num_rows($check))
{
	while($row=mysqli_fetch_assoc($check))
	echo $row['PassengerName']." ".$row['Age']." ".$row['NoofPassengers']." ".$row['PhoneNumber']." ".$row['Email']."<br>"."<br>";
}
else
{
	echo "Your details are not added into our data"."<br>";
}*/
?>
</div>
</body>
</html>
	
