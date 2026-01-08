<?php
session_start();
if (!isset($_SESSION['login_user'])) {
    header("location:userlogin.php");
    exit();
}

$con = mysqli_connect("localhost","root","","mentalhealthsystem");
if (!$con) {
    die("Database connection failed: " . mysqli_connect_error());
}

$query = mysqli_query($con, "SELECT * FROM cities");
if (!$query) {
    die("Query failed: " . mysqli_error($con));
}
?>
<!DOCTYPE html>
<html>
<head>
<title>View Cities</title>

<style>
a:link, a:visited {
  background-color: #0a0a0a;
  color: yellow;
  padding: 13px 25px;
  text-decoration: none;
  border-radius: 6px;
}

a:hover { background-color: #333; }

body {
  background-image: url("https://images5.alphacoders.com/968/968380.png");
  background-size: cover;
  margin: 0;
  font-family: Arial;
}

/* NAVBAR */
.navbar{
  width:100%;
  background:#333;
  padding:10px;
  box-sizing:border-box;
}
.navbar a{
  color:white;
  margin-right:15px;
  text-decoration:none;
  font-weight:bold;
}
.navbar a:hover{ text-decoration:underline; }

/* TABLE */
#customers {
  border-collapse: collapse;
  margin-top: 100px;
  width: 80%;
  background:white;
  box-shadow:0 4px 10px rgba(0,0,0,0.2);
}

#customers td, #customers th {
  border: 2px solid #ddd;
  padding: 10px;
  text-align: center;
  font-weight: bold;
}

#customers tr:nth-child(even) { background-color: #f2f2f2; }
#customers tr:nth-child(odd)  { background-color: #DACDCA; }

#customers th {
  background-color: #FA8072;
  color: white;
}

/* SECRET BOX */
.secret-box {
  position: fixed;
  top: 20px;
  right: 20px;
  background: rgba(255,255,255,0.9);
  padding: 10px 15px;
  border-radius: 8px;
  box-shadow: 0px 4px 10px rgba(0,0,0,0.2);
  z-index: 9999;
  width: 180px;
  overflow: hidden;
  transition: 0.4s;
}

.secret-img {
  width: 150px;
  display: none;
  opacity: 0;
  transition: opacity 0.4s ease-in-out;
}

/* GIF BOXES */
.gif-box {
  position: fixed;
  width: 160px;
  height: 160px;
  background: rgba(255,255,255,0.9);
  border: 2px dashed #bbb;
  border-radius: 10px;
  resize: both;
  overflow: hidden;
  cursor: grab;
  display: flex;
  align-items:center;
  justify-content:center;
  z-index: 9998;
}

.gif-box img {
  width: 100%;
  height: 100%;
  object-fit: contain;
}

.gif-close {
  position: absolute;
  top: 3px;
  right: 3px;
  width: 22px;
  height: 22px;
  border-radius: 50%;
  background:#ff5b5b;
  color:white;
  border:none;
  cursor:pointer;
}

/* CENTER BUTTONS UNDER TABLE */
.button-area {
  text-align: center;
  margin-top: 40px;
}

.button-area a {
  margin: 10px;
  display: inline-block;
}
</style>
</head>

<body>


<div class="navbar">
  <a href="viewcity.php">Find Doctors</a>
  <a href="drugadi.php">Drugs Addiction</a>
  <a href="selftracker.php">Mood Tracker</a>
  <a href="selfgrowth.php">Self Growth</a>
</div>


<div class="secret-box" id="secretBox">
  <p>Do you wanna know a secret?
    <a href="#"  data-onclick-code="secret(event)">Click Here</a>
  </p>
  <img src="https://media.tenor.com/2l2lVzBSq0IAAAAM/mental-diseases.gif" id="secretImg" class="secret-img">
</div>


<div class="gif-box" id="gifBox1">
  <button class="gif-close"  data-onclick-code="closeGif('gifBox1')">×</button>
  <img src="https://data.textstudio.com/output/sample/animated/2/3/2/7/chatgpt-1-17232.gif">
</div>


<div class="gif-box" id="gifBox2">
  <button class="gif-close"  data-onclick-code="closeGif('gifBox2')">×</button>
  <img src="https://media.tenor.com/y2JXkY1pXkwAAAAM/cat-computer.gif">
</div>


<table id="customers" align="center">
<tr>
  <td colspan="2">Welcome: <?php echo htmlspecialchars($_SESSION['login_user']); ?></td>
  <td colspan="2"><a href="index.php">Logout</a></td>
</tr>

<tr>
  <th>Serial No</th>
  <th>City Name</th>
  <th>Doctors</th>
</tr>

<?php
$sr = 1;
while ($row = mysqli_fetch_assoc($query)) {
?>
<tr>
  <td><?php echo $sr++; ?></td>
  <td><?php echo htmlspecialchars($row['City']); ?></td>
  <td><a href="viewdoc.php?cid=<?php echo (int)$row['SNo']; ?>">View</a></td>
</tr>
<?php } ?>
</table>


<div class="button-area">
  <a href="quiz1.php">Take a Quiz</a>
  <a href="breathe.php">Calming Technique</a>
</div>


<script>
let expanded = false;

function secret(e){
  e.preventDefault();
  let box = document.getElementById("secretBox");
  let img = document.getElementById("secretImg");

  if(!expanded){
    box.style.width="250px";
    img.style.display="block";
    setTimeout(()=> img.style.opacity="1", 40);
    expanded = true;
  } else {
    window.location.href="jk.php";
  }
}
</script>


<script>
function initGif(id){
  const box = document.getElementById(id);
  let dragging = false, dx=0, dy=0;

  let L = localStorage.getItem(id+"Left");
  let T = localStorage.getItem(id+"Top");
  let W = localStorage.getItem(id+"Width");
  let H = localStorage.getItem(id+"Height");

  if(L) box.style.left = L+"px";
  if(T) box.style.top = T+"px";
  if(W) box.style.width = W+"px";
  if(H) box.style.height= H+"px";

  box.addEventListener("mousedown", e=>{
    if(e.target.classList.contains("gif-close")) return;
    dragging = true;
    dx = e.clientX - box.offsetLeft;
    dy = e.clientY - box.offsetTop;
    box.style.cursor="grabbing";
  });

  document.addEventListener("mousemove", e=>{
    if(!dragging) return;
    box.style.left = (e.clientX - dx)+"px";
    box.style.top  = (e.clientY - dy)+"px";
  });

  document.addEventListener("mouseup", ()=>{
    if(dragging){
      localStorage.setItem(id+"Left", box.offsetLeft);
      localStorage.setItem(id+"Top", box.offsetTop);
      localStorage.setItem(id+"Width", box.offsetWidth);
      localStorage.setItem(id+"Height", box.offsetHeight);
    }
    dragging = false;
    box.style.cursor="grab";
  });
}

function closeGif(id){ document.getElementById(id).style.display="none"; }

initGif("gifBox1");
initGif("gifBox2");
</script>

<script src="/js/app.js"></script>
</body>
</html>
