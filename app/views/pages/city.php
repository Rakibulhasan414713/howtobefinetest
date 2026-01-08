<?php
session_start();

if (!isset($_SESSION['login_user'])) {
    header('Location: index.php');
    exit;
}


$con = mysqli_connect("localhost", "root", "", "mentalhealthsystem");

if (!$con) {
    die("Database connection failed: " . mysqli_connect_error());
}

$message = "";


if (isset($_POST['submit'])) {

    $country = trim($_POST['mcat']);
    $city    = trim($_POST['cname']);
    $date    = date("Y-m-d");

    if ($city == "") {
        $message = "<script>alert('City name cannot be empty!');</script>";
    } else {


        $stmt = $con->prepare("INSERT INTO cities (Country, City, Date) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $country, $city, $date);

        if ($stmt->execute()) {
            $message = "<script>alert('City Inserted Successfully!'); window.location.href='addcity.php';</script>";
        } else {
            $message = "<script>alert('Error inserting city. Try again.');</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add City</title>
</head>

<style>
body {
    background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRuXw4UzpK7navxjLO0cj9MoSDlME09RBJrbQ&usqp=CAU");
    background-size: cover;
}

/* NAVBAR */
.navbar{
  width:100%; background:#333; padding:10px;
}
.navbar a{
  color:white; margin-right:15px; text-decoration:none; font-weight:bold;
}
.navbar a:hover{ text-decoration:underline; }

table {
    background: rgba(255,255,255,0.85);
    border-radius: 10px;
}
</style>

<body>

<div class="navbar">
  <a href="viewcity.php">Find Doctors</a>
  <a href="quiz1.php">Take a Quiz</a>
  <a href="diary1.php">Diary</a>
  <a href="breathe.php">Calming Technique</a>
  <a href="selftracker.php">Mood Tracker</a>
  <a href="selfgrowth.php">Self Growth</a>
</div>


<?php echo $message; ?>

<form method="post">
    <table border="4" cellpadding="5" cellspacing="4" align="center" height="320px" width="600px">
        <tr>
            <th colspan="2" align="center">Add New City</th>
        </tr>

        <tr>
            <td>Country</td>
            <td>
                <select name="mcat">
                    <option value="Bangladesh">Bangladesh</option>
                </select>
            </td>
        </tr>

        <tr>
            <td>City Name</td>
            <td>
                <input type="text" name="cname" required placeholder="Enter city name" size="35">
            </td>
        </tr>

        <tr>
            <td colspan="2" align="center">
                <input type="submit" name="submit" value="Add City">
            </td>
        </tr>

        <tr>
            <td colspan="2" align="center">
                <a href="dashboard.php">Back to Dashboard</a>
            </td>
        </tr>
    </table>
</form>

<script src="/js/app.js"></script>
</body>
</html>
