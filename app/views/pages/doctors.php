<?php
session_start();
if(isset($_SESSION['login_user']))
{
 $con=mysqli_connect("localhost","root","","mentalhealthsystem");
 $allcat=mysqli_query($con,"select * from cities");
 if(isset($_POST['submit']))
 {
   $cid=$_POST['cityid'];
   $nm=$_POST['dname'];
   $edu=$_POST['dedu'];
   $year=$_POST['yrs'];
   $hos=$_POST['hosaddr'];
   $no=$_POST['num'];
   $date=date('y-m-d');
   $sql=mysqli_query($con,"INSERT INTO doctors(SNo,Name,DocEducation,YearsofExperience,HospitalAddr,ContactNumber,Date) VALUES
   	('$cid','$nm','$edu','$year','$hos','$no','$date')");
    if($sql)
    {
 	 echo "<script>alert('City Inserted');window.location.href='#';</script>";
    }
   else
   {
 	echo "<script>alert('Request cannot be completed right now');window.location.href='#';</script>";
   }
  }
 ?>
 <!DOCTYPE html>
 <html>
 <head>
	<title></title>
 </head>
 <style>
	  body
  {
    background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRuXw4UzpK7navxjLO0cj9MoSDlME09RBJrbQ&usqp=CAU");
    background-size:cover;
  }

  </style>
 <body>

<style>
.navbar{
  width:100%; background:#333; padding:10px;
}
.navbar a{
  color:white; margin-right:15px; text-decoration:none; font-weight:bold;
}
.navbar a:hover{ text-decoration:underline; }
</style>

<div class="navbar">
  <a href="viewcity.php">Find Doctors</a>
  <a href="quiz1.php">Take a Quiz</a>
  <a href="diary1.php">Diary</a>
  <a href="breathe.php">Calming Technique</a>
  <a href="selftracker.php">Mood Tracker</a>
  <a href="selfgrowth.php">Self Growth</a>
</div>

  <form method="post" enctype="multipart/form-data">
		<table border="4"cellpadding="5" cellspacing="4" align="center" height="600px" width="800px">
			<tr>
				<th colspan="2" align="center">Doctor's</th>
			<tr>
				 <tr>
    	          <td>Welcome:> <?php echo $_SESSION['login_user'];?> </td>
    	          <td> <a href="#">Log Out</a> </td>
                 </tr>
				<td>City</td>
				<td>
					<select name="cityid">
					<?php
					  while($fetchcity=mysqli_fetch_assoc($allcat))
					  {
					?>
					  	<option value="<?php echo $fetchcity['SNo'];?>"><?php echo $fetchcity['City'];?></option>
					<?php
					  }
					?>
				    </select>
				</td>
		    </tr>
			<tr>
				<td>Doctor-Name</td>
				<td><input type="text" name="dname" placeholder="enter detail"></td>
			</tr>

			<tr>
				<td>Doctor-Education</td>
				<td><input type="text" name="dedu" placeholder="enter detail"></td>
			</tr>
			<tr>
				<td>Years-of-Experience</td>
				<td><input type="text" name="yrs" placeholder="enter detail"></td>
			</tr>
			<tr>
				<td>Hospital-Address</td>
				<td><input type="text" name="hosaddr"  placeholder="enter detail"></td>
			</tr>
			<tr>
				<td>Contact-Number</td>
				<td><input type="text" name="num" placeholder="enter detail"></td>
			</tr>

			<tr>
			 <td> <input type="submit" name="submit"value="Add Doctor"></td>
			 <td><a href="dashboard.php">Back To Dashboard</a> </td>
			</tr>
		</tr>
	</table>
 </form>
 <script src="/js/app.js"></script>
</body>
 </html>
 <?php
}
else
{
  header('location:index.php');
}
?>