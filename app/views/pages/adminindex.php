<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style>
	body
	{
		margin: 0px;
		padding: 0px;
		font-family: sans-serif;
		background: #f17e7e;
	}
	.box
	{
		width: 300px;
		padding: 40px;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%,-50%);
		text-align: center;
		background: #f17e7e;
	}
	.box h1
	{
		color: white;
		font-weight: 5000;
	}
	.user
	{
		border: 0px;
		background: none;
		display: block;
		margin: 20px auto;
		border: 2px solid #3498db;
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
		border-color: #000000;
	}
	.pass
	{
		border: 0px;
		background: none;
		display: block;
		margin: 20px auto;
		border: 2px solid #3498db;
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
		border-color: #cc2e2e;
	}
	.input
	{
		border: 0px;
		background: none;
		display: block;
		margin: 20px auto;
		border: 2px solid #000000;
		padding: 14px 40px;
		outline: none;
		color: white;
		border-radius: 24px;
		transition: 0.25s;
		cursor: pointer;
	}
	.input:hover
	{
		background: #c23d3d;
	}
</style>
<body>
	<div class="login box">
		<form method="post" class="box" action="login.php" id="adminLoginForm">
  <div id="ajaxErrorAdminLogin" style="display:none;color:red;margin:10px 0;"></div>
		<h1>Login</h1>
		<input type="text" name="uname" placeholder="Username" class="user">
		<input type="Password" name="pass" class="pass" placeholder="Password">
        <input type="submit" name="login" value="Login" class="input">

    </form>
<script src="/js/app.js"></script>
<script src="../../../public/js/ajax-auth.js"></script>
</body>
</html>