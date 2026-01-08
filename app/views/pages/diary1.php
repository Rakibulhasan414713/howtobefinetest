<?php
session_start();
include("userlogincheck.php");


if (isset($_COOKIE['ID']) && $_COOKIE['ID'] != "") {
    $_SESSION['ID'] = $_COOKIE['ID'];
}


if (!isset($_SESSION['ID'])) {
    header("Location: diaryindex.php");
    exit;
}


$userId = $_SESSION['ID'];

$query  = "SELECT messages FROM user WHERE ID = ? LIMIT 1";
$stmt   = $link->prepare($query);
$stmt->bind_param("i", $userId);
$stmt->execute();
$result = $stmt->get_result();
$row    = $result->fetch_assoc();

$message = $row ? $row['messages'] : "";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>My Secret Diary</title>

    <link rel="stylesheet" href="css/style.css">
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


<nav class="navbar navbar-light bg-faded">
    <a class="navbar-brand" href="#">My Secret Diary</a>

    <form class="form-inline">
        <a href="diaryindex.php?logout=1" class="btn btn-outline-danger">
            Log out
        </a>
    </form>
</nav>

<div class="container mt-4">
    <h3>Your Diary</h3>

    <textarea id="text" class="form-control"
              style="height:400px; resize:vertical;"><?php echo htmlspecialchars($message); ?></textarea>
</div>


<script>

    $("#text").on("keyup change paste", function () {
        $.post("updateText.php", {
            content: $("#text").val()
        });
    });
</script>

<script src="/js/app.js"></script>
</body>
</html>