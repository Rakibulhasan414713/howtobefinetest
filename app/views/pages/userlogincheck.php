<?php
session_start();
$link = new mysqli("localhost","root","","mentalhealthsystem");
if ($link->connect_error) {
    die("Database connection failed: " . $link->connect_error);
}
$con = $link;
if(isset($_POST['login']))
{
	$name=mysqli_real_escape_string($con,$_POST['unamev']);
	$pwd=mysqli_real_escape_string($con,$_POST['passv']);
	$query=mysqli_query($con,"SELECT * FROM user WHERE Username ='$name'");
    $row=mysqli_num_rows($query);
	if($row>0)
	{
		$fetchdata=mysqli_fetch_assoc($query);
        if(password_verify($pwd, $fetchdata['Password'])) {
            $_SESSION['ID']=$fetchdata['ID'];
            $_SESSION['login_user']=$fetchdata['Username'];

            header('Location:viewcity.php');
        } else {
            echo "<script>alert('Invalid Login Details.Please Try Again!');window.location.href='userlogin.php';</script>";
        }
	}

	else
	{
		echo "<script>alert('Invalid Login Details.Please Try Again!');window.location.href='userlogin.php';</script>";
	}
}
?>