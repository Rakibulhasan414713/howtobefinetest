<?php
session_start();
include("userlogincheck.php");

$error = "";
$success = "";


if (isset($_GET["logout"])) {
    session_unset();
    session_destroy();
    setcookie("ID", "", time() - 3600);
    header("Location: index.php");
    exit;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = trim($_POST['Username'] ?? "");
    $password = trim($_POST['Password'] ?? "");
    $action   = $_POST['sign'] ?? "";

    if ($username == "") {
        $error = "Enter your Username.";
    } elseif ($password == "") {
        $error = "Enter your Password.";
    } else {


        if ($action == "1") {

            $email            = trim($_POST['email'] ?? "");
            $confirmPassword  = trim($_POST['ConfirmPassword'] ?? "");

            if ($email == "" || $confirmPassword == "") {
                $error = "All fields are required.";
            } elseif ($password != $confirmPassword) {
                $error = "Passwords do not match.";
            } else {


                $query = "SELECT ID FROM user WHERE Username = ?";
                $stmt = $link->prepare($query);
                $stmt->bind_param("s", $username);
                $stmt->execute();
                $stmt->store_result();

                if ($stmt->num_rows > 0) {
                    $error = "Username already exists.";
                } else {


                    $query = "INSERT INTO user (Username, Password) VALUES (?, ?)";
                    $stmt = $link->prepare($query);
                    $stmt->bind_param("ss", $username, $password);

                    if ($stmt->execute()) {

                        $id = $stmt->insert_id;


                        $finalPassword = md5(md5($id) . $password);

                        $update = $link->prepare("UPDATE user SET Password=? WHERE ID=?");
                        $update->bind_param("si", $finalPassword, $id);
                        $update->execute();

                        $success = "Signup successful. Please log in.";
                    } else {
                        $error = "Signup failed. Try again.";
                    }
                }
            }
        }


        else if ($action == "0") {

            $query = "SELECT ID, Password FROM user WHERE Username=? LIMIT 1";
            $stmt = $link->prepare($query);
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $result = $stmt->get_result();
            $row = $result->fetch_assoc();

            if ($row) {
                $hashed = md5(md5($row['ID']) . $password);
                if ($hashed == $row['Password']) {

                    $_SESSION['ID'] = $row['ID'];

                    if (!empty($_POST['stayloggedin'])) {
                        setcookie("ID", $row['ID'], time() + 86400 * 365);
                    }

                    header("Location: diary1.php");
                    exit;
                }
            }

            $error = "Invalid Username or Password.";
        }


        else if ($action == "2") {

            $query = "SELECT ID FROM user WHERE Username=? LIMIT 1";
            $stmt = $link->prepare($query);
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($row = $result->fetch_assoc()) {

                $id = $row['ID'];
                $newHash = md5(md5($id) . $password);

                $update = $link->prepare("UPDATE user SET Password=? WHERE ID=?");
                $update->bind_param("si", $newHash, $id);

                if ($update->execute()) {
                    $success = "Password changed successfully.";
                } else {
                    $error = "Error updating password.";
                }
            } else {
                $error = "User does not exist. Please sign up.";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
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


<div class="container col-md-6" id="header">
    <h1 class="display-4">My Secret Diary</h1>
    <small class="form-text text-muted"><b>Store your moments and secrets safely.</b></small>


    <?php if ($error): ?>
        <div class="alert alert-danger"><?= $error ?></div>
    <?php elseif ($success): ?>
        <div class="alert alert-success"><?= $success ?></div>
    <?php endif; ?>

</div>

<script>
    $("#clickLogIn").click(function () {
        $("#signUp").toggle();
        $("#logIn").toggle();
    });

    $("#changePassword").click(function () {
        $("#logIn").toggle();
        $("#forgetpassword").toggle();
    });
</script>

<script src="/js/app.js"></script>
</body>
</html>