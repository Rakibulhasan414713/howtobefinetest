<?php
session_start();
$con=mysqli_connect("localhost","root","","mentalhealthsystem");
if(isset($_POST['login']))
{
	$name=mysqli_real_escape_string($con,$_POST['uname']);
	$pwd=mysqli_real_escape_string($con,$_POST['pass']);
	$query=mysqli_query($con,"SELECT * FROM admin WHERE Name ='$name' AND Password ='$pwd'");
    $row=mysqli_num_rows($query);
	if($row>0)
	{
		$fetchdata=mysqli_fetch_assoc($query);

        $_SESSION['login_user']=$fetchdata['Name'];
        $_SESSION['login_pass']=$fetchdata['Password'];
        header('Location:dashboard.php');
	}

	else
	{
		echo "<script>alert('Invalid Login Details.Please Try Again!');window.location.href='index.php';</script>";
	}
}
?>