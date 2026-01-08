<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<style>

    body
  {
    margin: 0px;
    padding: 0px;
    font-family: sans-serif;
      background-image: url("bg1.png");
    background-size:cover;
  }
  .box
  {
    width: 300px;
    padding: 40px;
    position: absolute;
    top: 55%;
    left: 50%;
    transform: translate(-50%,-50%);
    background:#131212;
    text-align: center;
  }
  .box h1
  {
    color:rgb(220, 124, 124);
    font-weight: 5000;
  }
  .user
  {
    border: 0px;
    background:none;
    display: block;
    margin: 20px auto;
    border: 3px solid #3498db;
    padding: 14px 10px;
    width: 200px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s;
  }
  .user:focus
  {
    width: 280px;
    border-color: #2ecc71;
  }
  .pass
  {
    border: 0px;
    background: none;
    display: block;
    margin: 20px auto;
    border: 3px solid #3498db;
    padding: 14px 10px;
    width: 200px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s;
  }
  .pass:focus
  {
    width: 280px;
    border-color: #2ecc71;
  }
  .input
  {
    border: 0px;
    background: none;
    display: block;
    margin: 25px auto;
    border: 2px solid #2ecc71;
    padding: 14px 40px;
    outline: none;
    color: white;
    font-size:17px;
    border-radius: 24px;
    transition: 0.25s;
    cursor: pointer;
  }
  .input:hover
  {
    background: #2ecc71;
  }
  .bt
  {
    border: 0px;
    background: none;
    text-decoration: none;
    display: block;
    margin: 20px auto;
    padding: 14px 45px;
    outline: none;
    color: white;
    border-radius: 24px;
    transition: 0.25s;
    cursor: pointer;
  }
  .bt:hover
  {
   background:skyblue;
  }
  .at
  {
    text-decoration:none;
    color:white;
    font-size: 20px;
  }

</style>
<body>

  <div class="login box">
    <form method="post" class="box" action="userlogincheck.php" id="userLoginForm">
  <div id="ajaxErrorUserLogin" style="display:none;color:red;margin:10px 0;"></div>
    <h1>LOGIN</h1>
    <input type="text" name="unamev" placeholder="Username" class="user">
    <input type="Password" name="passv" class="pass" placeholder="Password">
    <input type="submit" name="login" value="Login" class="input">
     <button class="bt"><a class="at" href="usersignup.php">Create Account</a></button>
     <button class="bt"><a class="at" href="adminindex.php">Admin Login</a></button>

   </form>
  </div>
<script src="/js/app.js"></script>
<script src="../../../public/js/ajax-auth.js"></script>
</body>
</html>