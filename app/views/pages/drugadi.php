<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Understanding Drug Addiction</title>

<style>
  body {
    font-family: Arial, sans-serif;
    background: #f5f5f5;
    padding: 20px;
  }

  h1 {
    text-align: center;
    color: #d32f2f;
  }

  nav {
    text-align: center;
    margin-bottom: 20px;
  }

  nav a {
    background: #000;
    color: yellow;
    padding: 10px 18px;
    border-radius: 6px;
    text-decoration: none;
  }
  nav a:hover { background: #333; }

  section {
    background: #fff;
    padding: 20px;
    border-radius: 10px;
    max-width: 750px;
    margin: auto;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
  }

  h2 { color: #333; }

  ul {
    padding-left: 20px;
  }

  li {
    margin-bottom: 8px;
    font-size: 1.15em;
  }

  /* SECRET BOX */
  #secretBox {
    position: fixed;
    top: 20px;
    right: 20px;
    background: rgba(255,255,255,0.95);
    padding: 12px;
    width: 220px;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.3);
    resize: both;
    overflow: auto;
    cursor: grab;
    z-index: 9999;
  }

  #secretBox img {
    width: 150px;
    margin-top: 10px;
  }

  #secretBox a {
    color: #c00;
    text-decoration: underline;
    font-weight: bold;
  }

  /* GIF BOX */
  #gifBox {
    position: fixed;
    top: 120px;
    left: 20px;
    width: 160px;
    height: 160px;
    background: white;
    border: 2px dashed #bbb;
    border-radius: 10px;
    resize: both;
    overflow: hidden;
    cursor: grab;
    box-shadow: 0 4px 12px rgba(0,0,0,0.25);
    z-index: 9998;
  }

  #gifBox img {
    width: 100%;
    height: 100%;
    object-fit: contain;
  }

  #gifClose {
    position: absolute;
    top: 3px;
    right: 3px;
    width: 22px;
    height: 22px;
    background: #ff5b5b;
    color: white;
    border: none;
    border-radius: 50%;
    cursor: pointer;
    font-weight: bold;
  }
</style>
</head>

<body>


<div id="secretBox">
  <b style="color:red;">Having Trouble With Drug Addiction?</b>
  <img src="https://media0.giphy.com/media/RX36qtKwbW49VkeFgr/giphy.webp">
  <br>
  <a href="drug.php">Click Here</a>
</div>


<div id="gifBox">
  <button id="gifClose">×</button>
  <img src="https://media.tenor.com/y2JXkY1pXkwAAAAM/cat-computer.gif">
</div>

<h1>It's okay – things will get better ❤️</h1>

<nav>
  <a href="index.php">Home</a>
</nav>

<section>
  <h2>What Is Drug Addiction?</h2>
  <p>
    Drug addiction is a chronic condition where a person becomes physically or mentally dependent on a substance.
    Over time, the drug changes how the brain works, making it incredibly hard to stop even when the person wants to.
  </p>
</section>

<section>
  <h2>Types of Drugs Commonly Misused</h2>
  <ul>
    <li><strong>Tobacco:</strong> Contains nicotine, which is extremely addictive and harmful to the lungs and heart.</li>
    <li><strong>Alcohol:</strong> A depressant that affects judgment, coordination, and emotional stability.</li>
    <li><strong>Methamphetamine (Meth):</strong> A powerful stimulant that can cause aggression, psychosis, and severe physical damage.</li>
    <li><strong>LSD:</strong> A hallucinogen that changes perception, emotions, and sense of reality.</li>
    <li><strong>Marijuana:</strong> A psychoactive drug that can affect memory, motivation, and mental health.</li>
    <li><strong>Sleeping Pills:</strong> Often misused for sedation or escape, leading to dependence.</li>
  </ul>
</section>

<section>
  <h2>Why Do Teenagers Start Using Drugs?</h2>
  <ul>
    <li>Peer pressure and wanting to fit in</li>
    <li>Curiosity and experimenting</li>
    <li>Stress, anxiety, or depression</li>
    <li>Family problems or lack of support</li>
    <li>Wanting to escape emotional pain</li>
    <li>Influence from movies, social media, or music</li>
    <li>Not understanding long-term consequences</li>
  </ul>
</section>


<section>
  <h2>Long-Term Effects of Drug Use on the Brain & Body</h2>

  <h3 style="color:#b71c1c;">🧠 Effects on the Brain</h3>
  <ul>
    <li>Memory loss and difficulty concentrating</li>
    <li>Changes in emotional control (anger, sadness, mood swings)</li>
    <li>Reduced ability to feel happiness (dopamine depletion)</li>
    <li>Impaired judgment and decision-making</li>
    <li>Increased risk of anxiety, depression, or psychosis</li>
    <li>Permanent brain structure changes from heavy drug use</li>
  </ul>

  <h3 style="color:#006064;">💪 Effects on the Body</h3>
  <ul>
    <li>Heart damage and irregular heartbeat</li>
    <li>Lung diseases (especially from nicotine and smoking drugs)</li>
    <li>Liver failure (especially from alcohol)</li>
    <li>Weak immune system → frequent infections</li>
    <li>Severe weight loss or gain</li>
    <li>Hormonal imbalance & fertility issues</li>
    <li>Kidney failure, stomach issues, sleep disorders</li>
  </ul>

  <h3 style="color:#4a148c;">🧩 Social & Emotional Effects</h3>
  <ul>
    <li>Damaged relationships</li>
    <li>Financial problems</li>
    <li>Poor academic or work performance</li>
    <li>Withdrawal, isolation & loneliness</li>
    <li>Higher risk of self-harm or risky behaviour</li>
  </ul>

  <p style="font-weight:bold; color:#d32f2f; text-align:center; margin-top:15px;">
    Addiction is treatable — recovery is always possible ❤️
  </p>
</section>

<script>

let gif = document.getElementById("gifBox");
let gifDrag = false, gx = 0, gy = 0;

gif.addEventListener("mousedown", function(e){
  if(e.target.id === "gifClose") return;
  gifDrag = true;
  gx = e.clientX - gif.offsetLeft;
  gy = e.clientY - gif.offsetTop;
  gif.style.cursor = "grabbing";
});

document.addEventListener("mousemove", function(e){
  if(!gifDrag) return;
  gif.style.left = (e.clientX - gx) + "px";
  gif.style.top  = (e.clientY - gy) + "px";
});

document.addEventListener("mouseup", function(){
  gifDrag = false;
  gif.style.cursor = "grab";
});

document.getElementById("gifClose").onclick = function(){
  gif.style.display = "none";
};


let s = document.getElementById("secretBox");
let sDrag = false, sx = 0, sy = 0;

s.addEventListener("mousedown", function(e){
  sDrag = true;
  sx = e.clientX - s.offsetLeft;
  sy = e.clientY - s.offsetTop;
  s.style.cursor = "grabbing";
});

document.addEventListener("mousemove", function(e){
  if(!sDrag) return;
  s.style.left = (e.clientX - sx) + "px";
  s.style.top  = (e.clientY - sy) + "px";
});

document.addEventListener("mouseup", function(){
  sDrag = false;
  s.style.cursor = "grab";
});
</script>

<script src="/js/app.js"></script>
</body>
</html>
