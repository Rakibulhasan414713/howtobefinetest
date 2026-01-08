<?php
session_start();
if(isset($_SESSION['login_user']))
{
    $con = mysqli_connect("localhost","root","","mentalhealthsystem");
    if (!$con) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    $id = filter_input(INPUT_GET, 'cid', FILTER_VALIDATE_INT);
    if (!$id) {
        header('location:viewcity.php');
        exit;
    }

    $stmt = mysqli_prepare($con, "SELECT Name, DocEducation, YearsofExperience, HospitalAddr, ContactNumber FROM doctors WHERE SNo = ?");
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
?>

 <!DOCTYPE html>
 <html>
 <head>
  <style>

  body {
      background-image: url("https://i.gifer.com/9igk.gif");
    background-size:cover;
  }

  #customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 75%;
  }

  #customers td, #customers th {
    border: 2px solid #ddd;
    padding: 8px;
    padding-bottom: 10px;
    font-weight: bold;
    font-size: 22px;
    text-align:center;
  }


  #customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align:center;
    background-color:	#FA8072;
    color: black;
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

  <form method="post" enctype="multipart/form-data">

    <table id="customers" border="2" cellpadding="5" cellspacing="4" align="center" height="600px" width="800px">
      <tr>
        <td colspan ="2">Welcome:<?php echo $_SESSION['login_user'];?></td>
        <td colspan="3" align="center"> <a href="index.php">Logout</a>
       </td>
      </tr>

     <tr>
        <th>Doctor's Name</th>
        <th>Degree</th>
        <th>Years Of Experience</th>
        <th>Hospital Address</th>
        <th>Contact Number</th>
      </tr>
        <?php
        if(mysqli_num_rows($result) > 0)
        {
          while($row=mysqli_fetch_array($result))
          {
        ?>
        <tr>
          <td> <?php echo htmlspecialchars($row["Name"]); ?> </td>
          <td> <?php echo htmlspecialchars($row["DocEducation"]); ?> </td>
          <td> <?php echo htmlspecialchars($row["YearsofExperience"]); ?> </td>
          <td> <?php echo htmlspecialchars($row["HospitalAddr"]); ?> </td>
          <td> <?php echo htmlspecialchars($row["ContactNumber"]); ?> </td>
        </tr>

      <?php
            }
          }
      ?>
  </table>
 </form>
 <script src="/js/app.js"></script>
</body>
 </html>
 <?php
}
 else
 {
 header('location:userlogin.php');
 }?>
