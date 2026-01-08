<?php
session_start();

if (!isset($_SESSION['login_user'])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>

    <style>
        body {
            background-image: url("bg2.png");
            background-size: cover;
        }

        #customers {
            text-decoration: none;
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            margin-top: 100px;
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

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:nth-child(odd) {
            background-color: #DACDCA;
        }

        #customers th {
            padding-top: 15px;
            padding-bottom: 22px;
            text-align: center;
            background-color: #F3B8A1;
            color: white;
        }

        a:link, a:visited {
            background-color: #ff6961;
            color: yellow;
            padding: 13px 25px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
        }

        a:hover, a:active {
            background-color: yellowred;
        }

        /* Navbar */
        .navbar {
            width: 100%;
            background: #333;
            padding: 10px;
        }

        .navbar a {
            color: white;
            margin-right: 15px;
            text-decoration: none;
            font-weight: bold;
        }

        .navbar a:hover {
            text-decoration: underline;
        }
    </style>

</head>
<body>

<div class="navbar">
    <a href="viewcity.php">Find Doctors</a>
    <a href="quiz1.php">Take a Quiz</a>
    <a href="diary1.php">Diary</a>
    <a href="breathe.php">Calming Technique</a>
    <a href="selftracker.php">Mood Tracker</a>
    <a href="selfgrowth.php">Self Growth</a>
</div>

<table id="customers" align="center">
    <tr>
        <th colspan="2">ADMIN DASHBOARD</th>
    </tr>

    <tr>
        <td colspan="1">
            Welcome: <b><?php echo htmlspecialchars($_SESSION['login_user']); ?></b>
        </td>
        <td>
            <a href="index.php"><b>Log Out</b></a>
        </td>
    </tr>

    <tr>
        <td colspan="2" align="center">
            <a href="city.php">Add City</a>
        </td>
    </tr>

    <tr>
        <td colspan="2" align="center">
            <a href="doctors.php">Add Doctor</a>
        </td>
    </tr>

    <tr>
        <td colspan="2" align="center">
            <a href="viewprofile.php">View Profile</a>
        </td>
    </tr>
</table>

<script src="/js/app.js"></script>
</body>
</html>
