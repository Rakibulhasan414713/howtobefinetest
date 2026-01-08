<?php
session_start();
if(isset($_SESSION['login_user']))
  {
    $con=mysqli_connect("localhost","root","","mentalhealthsystem");
    $query=mysqli_query($con,"Select * from cities");
       ?>
<!DOCTYPE html>
<html>
<head>
  <style>

  body {
      background-image: url("https://images.pexels.com/photos/33834/landscape-shore-sunset-clouds.jpg?auto=compress&cs=tinysrgb&dpr=1&w=500");
    background-size:cover;

  }

  #customers {
  text-decoration: none;
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
  margin-top:100px;
  width: 80%;
  height: 80%;
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
    color: white;
  }

  #customer td{
    text-decoration: none;
  }
  .quiz{
    position: absolute;
    top: 70%;
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
        <td colspan ="2" align="left">Welcome:<?php echo $_SESSION['login_user'];?></td>
        <td colspan="2" align="right"> <a href="index.php">Logout</a>
       </td>
      </tr>
      <tr>
        <th>Serial No</th>
        <th>City Name</th>
        <th>Doctors</th>
       </tr>
       <?php
        $sr=1;
        while($fetchdata=mysqli_fetch_assoc($query))
        {
          ?>
            <tr>

              <td><?php echo $sr;?></td>
              <td><?php echo $fetchdata['City'];?></td>
              <td>
                 <a href="viewdoc.php?cid=<?php echo $fetchdata['SNo'];?>">View</a>
            </td>
            </tr>
            <?php $sr++;}?>
</table>
<div class="quiz">

<a href = 'quiz1.php'>
    TAKE A QUIZ</a></div>

<script src="/js/app.js"></script>
</body>
</html>
<?php
}
else
{
  header('location:userlogin.php');
}
?>
