<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Calming Techniques</title>
<style>
body{background:#f5f2f2;font-family:Arial;padding:15px;font-size:1.1em;}
h1{text-align:center;color:#d32f2f;}
nav{text-align:center;margin-bottom:20px;}
nav a{background:#0a0a0a;color:yellow;padding:10px 18px;border-radius:6px;text-decoration:none;}
section{background:white;padding:20px;margin:20px auto;max-width:700px;border-radius:10px;box-shadow:0 4px 12px rgba(0,0,0,0.1);}
#gifBox,#secretBox{position:fixed;resize:both;overflow:auto;cursor:grab;z-index:9999;background:white;padding:10px;border-radius:10px;box-shadow:0 4px 10px rgba(0,0,0,0.3);}
#gifBox{top:100px;left:10px;width:160px;height:160px;}
#gifClose{position:absolute;top:3px;right:3px;background:#ff5b5b;color:#fff;border:none;border-radius:50%;}
.tab-buttons{text-align:center;margin-top:20px;}
.tab-buttons a{margin:5px;display:inline-block;padding:8px 14px;background:#333;color:white;border-radius:6px;text-decoration:none;}
</style>
</head>
<body>
<div id="secretBox">
<b style="color:red;">Having Trouble With Drug Addiction?</b>
<img src="https://media0.giphy.com/media/RX36qtKwbW49VkeFgr/giphy.webp" style="width:150px;margin-top:10px;">
<a href="drug.php" style="color:#c00;text-decoration:underline;">Click Here</a>
</div>

<div id="gifBox">
<button id="gifClose">×</button>
<img src="https://i.pinimg.com/originals/57/d7/0e/57d70ecff79b120f78cc6c645853e9c3.gif" style="width:100%;height:100%;object-fit:contain;">
</div>

<h1>It's okay – things will get better ❤️</h1>
<nav><a href="index.php">Home</a></nav>

<section>
<h2>Ways to Maintain Positive Mental Health</h2>
<ul>
<li>Getting professional help if needed</li>
<li>Take prescribed medications</li>
<li>Connecting with others</li>
<li>Being physically active</li>
<li>Helping others</li>
<li>Getting enough sleep</li>
<li>Mindfulness & breathing</li>
<li>Drawing, coloring & hobbies</li>
<li>Avoid caffeine</li>
<li>Healthy diet & water intake</li>
<li>Limit social media</li>
</ul>
</section>

<section>
<h2>Breathing Exercise</h2>
<p>Inhale through the nose... exhale through the mouth. Slow and calm.</p>
<img src="circle-.gif" style="border:5px solid black;max-width:250px;">
</section>

<div class="tab-buttons">
<a href="adhd.php">ADHD</a>
<a href="anxiety.php">Anxiety</a>
<a href="ptsd.php">PTSD</a>
<a href="depression.php">Depression</a>
<a href="childhood_trauma.php">Childhood Trauma</a>
<a href="bullying_recovery.php">Bullying Recovery</a>
<a href="ocd.php">OCD</a>
</div>

<script>
function makeDraggable(el, key){
 let drag=false,ox=0,oy=0;
 let savedL=localStorage.getItem(key+"L"), savedT=localStorage.getItem(key+"T"),
     savedW=localStorage.getItem(key+"W"), savedH=localStorage.getItem(key+"H");
 if(savedL)el.style.left=savedL+"px";
 if(savedT)el.style.top=savedT+"px";
 if(savedW)el.style.width=savedW+"px";
 if(savedH)el.style.height=savedH+"px";
 el.addEventListener("mousedown",e=>{
  if(e.target.id==="gifClose")return;
  drag=true; ox=e.clientX-el.offsetLeft; oy=e.clientY-el.offsetTop; el.style.cursor="grabbing";
 });
 document.addEventListener("mousemove",e=>{
  if(!drag)return;
  el.style.left=(e.clientX-ox)+"px"; el.style.top=(e.clientY-oy)+"px";
 });
 document.addEventListener("mouseup",()=>{
  if(drag){
   localStorage.setItem(key+"L",el.offsetLeft);
   localStorage.setItem(key+"T",el.offsetTop);
   localStorage.setItem(key+"W",el.offsetWidth);
   localStorage.setItem(key+"H",el.offsetHeight);
  }
  drag=false; el.style.cursor="grab";
 });
}
makeDraggable(document.getElementById("secretBox"),"secretBox");
makeDraggable(document.getElementById("gifBox"),"gifBox");
document.getElementById("gifClose").onclick=()=>document.getElementById("gifBox").style.display="none";
</script>

<script src="/js/app.js"></script>
</body>
</html>