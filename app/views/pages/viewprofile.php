<?php
session_start();
if(isset($_SESSION['login_user']))
{
    $con = mysqli_connect("localhost","root","","mentalhealthsystem");
    if (!$con) {
        die("Database connection failed: " . mysqli_connect_error());
    }
    $alladmin = mysqli_query($con, "SELECT * FROM admin");
    if (!$alladmin) {
        die("Query failed: " . mysqli_error($con));
    }
    $fetchinfo = mysqli_fetch_assoc($alladmin);
   ?>
 <!DOCTYPE html>
 <html>
 <head>
  <style>

  body
  {
    background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRuXw4UzpK7navxjLO0cj9MoSDlME09RBJrbQ&usqp=CAU");
    background-size:cover;

  }

   #customers
   {
     text-decoration: none;
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    margin-top:100px;
     width: 60%;
    height: 60%;
   }
   #customers td, #customers th {
    text-align: center;
    border: 2px solid #ddd;
    font-weight: bold;
    padding: 8px;
    padding-bottom: 20px;
  }

  #customers tr:nth-child(even){background-color: #f2f2f2;}

  #customers tr:nth-child(odd) {background-color: #DACDCA;}

  #customers th {
    padding-top: 15px;
    padding-bottom: 22px;
    text-align: center;
    background-color: #F3B8A1 ;
    color: yellow;
  }

  #customer td{
    text-decoration: none;
  }
  </style>
	<title></title>
 </head>
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

   <table id="customers" width="500" border="1" cellpadding="10" cellspacing="0" align="center">
   	<tr>
        <th colspan ="1">Welcome:<?php echo htmlspecialchars($_SESSION['login_user']);?></th>
        <th colspan="1" align="left"><a href="dashboard.php">Back to dashboard</a></th>
        <th colspan="1" align="right"><a href="index.php">Logout</a></th>
     </tr>
     <tr>
	 <td>Name</td>
		<td colspan="2"><?php echo htmlspecialchars($fetchinfo['Name']);?></td>

	</tr>
     <tr>
     	<td>Email</td>
					<td colspan="2"><?php echo htmlspecialchars($fetchinfo['Email']);?></td>

     </tr>
 </table>
 <script src="/js/app.js"></script>
</body>
 </html>
 <?php
}
else
{
  header('location:login.php');
}
?>