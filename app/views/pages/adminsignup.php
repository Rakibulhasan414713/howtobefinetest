<!DOCTYPE html>
<html>
<head>
    <title>Admin Signup</title>
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

<?php

echo $message;
?>

<form action="adminsignup.php" method="post">
    <table border="4" cellpadding="5" cellspacing="4" align="center" height="600px" width="800px">
        <tr>
            <th colspan="2" align="center">Admin Registration</th>
        </tr>
        <tr>
            <td>Name</td>
            <td><input type="text" name="uname" placeholder="Enter your name"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email" placeholder="Enter email"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="pass" placeholder="Enter password"></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" name="submit" value="Register">
            </td>
        </tr>
    </table>
</form>

<script src="/js/app.js"></script>
</body>
</html>
