<?php
$baseUrl = "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Self Growth & Motivation</title>

  <style>
    body{
      margin:0;
      font-family:Arial;
      background-color:#0b132b;
      color:#f5f5f5;
      scroll-behavior:smooth;
    }
    header{
      position:fixed;
      top:0;
      left:0;
      width:100%;
      z-index:1000;
      background-color:rgba(11,19,43,0.9);
      padding:10px 0;
      border-bottom:1px solid rgba(255,255,255,0.1);
      text-align:center;
    }
    header span{
      font-weight:bold;
      letter-spacing:2px;
      font-size:14px;
      color:#ffb347;
    }
    main{
      margin-top:60px;
    }
    .full-screen-section{
      min-height:100vh;
      display:flex;
      flex-direction:column;
      align-items:center;
      justify-content:center;
      text-align:center;
      transition:all 0.8s ease-out;
      opacity:0;
      transform:translateY(60px);
      padding:10px;
    }
  </style>

  <script>
    function animateSections(){
      var sections=document.querySelectorAll('.full-screen-section');
      var triggerPoint=window.innerHeight*0.7;
      for(var i=0;i<sections.length;i++){
        var rect=sections[i].getBoundingClientRect();
        if(rect.top<triggerPoint && rect.bottom>0){
          sections[i].style.opacity="1";
          sections[i].style.transform="translateY(0)";
        }
      }
    }

    var rotateQuotes=[
      "Growth begins at the end of your comfort zone.",
      "The obstacle is the way. — Marcus Aurelius",
      "Power grows in silence. Learn to move quietly.",
      "You have power over your mind — not outside events.",
      "Comfort is the enemy of achievement.",
      "Be both the lion and the fox. — Machiavelli",
      "We suffer more in imagination than in reality. — Seneca",
      "No one is coming to save you. This life is your responsibility.",
      "Appear weak when you are strong. — Sun Tzu",
      "Man conquers the world by conquering himself."
    ];

    var quoteIndex=0;

    function startRotatingQuotes(){
      var box=document.getElementById("rotating-quote-box");
      if(!box)return;
      setInterval(function(){
        quoteIndex=(quoteIndex+1)%rotateQuotes.length;
        box.textContent=rotateQuotes[quoteIndex];
      },3000);
    }

    function revealDarkWisdom(btn){
      var quotes=[
        "No one cares until you win.",
        "A calm mind is a deadly weapon.",
        "People support you until you pass them.",
        "Discipline makes you dangerous.",
        "Silence cannot be misquoted.",
        "The world rewards results, not effort."
      ];
      var box=document.getElementById("dark-box");
      if(!box)return;
      var random=Math.floor(Math.random()*quotes.length);
      box.textContent=quotes[random];
      if(btn)btn.style.display="none";
    }

    function randomQuote(){
      var allQuotes=rotateQuotes.concat([
        "Strength is earned, not given.",
        "The harder you train, the harder you are to break.",
        "Be ruthless with your goals.",
        "If you don’t control your emotions, they control you.",
        "Small efforts repeated become big results."
      ]);
      var text=allQuotes[Math.floor(Math.random()*allQuotes.length)];
      alert("Random Motivation:\n\n"+text);
    }

    function initPage(){
      animateSections();
      window.addEventListener("scroll",animateSections);
      startRotatingQuotes();
    }
  </script>
</head>

<body onload="initPage()">

<header>
  <span>Self Growth & Motivation</span>
</header>

<main>

<section class="full-screen-section" style="background:url('https://64.media.tumblr.com/1fc1dba81576ba4bf475bd93d530c8db/tumblr_phre3byIwe1wouno4o1_540.gif') center/cover;">
  <h1 style="font-size:46px;color:#ffe1d5;">Unlock Your Potential</h1>
  <p style="max-width:600px;">Scroll down to discover how self-growth and motivation can transform your life.</p>
  <blockquote style="color:#ffb347;">"The only limit to our realization of tomorrow is our doubts of today."</blockquote>
</section>

<section class="full-screen-section" style="background:url('https://i.redd.it/v0gq5h5efs4e1.gif') center/cover;">
  <h2 style="font-size:38px;color:#ffdcc2;">What Is Self-Growth?</h2>
  <p style="max-width:650px;">Self-growth is the process of improving your skills, mindset, and habits.</p>
  <blockquote style="color:#ffb347;">"Be not afraid of growing slowly, be afraid only of standing still."</blockquote>
</section>

<section class="full-screen-section" style="background:url('https://64.media.tumblr.com/e027970356350d4e6609753e71ea5cf7/1b2d43a9f422f3bc-31/s540x810/4ea25fc8c5459c7ef09434d8ccf8da3cb1ebad01.gifv') center/cover;">
  <h2 style="color:#ffdcc2;">Why Motivation Matters</h2>
  <p style="max-width:680px;">Motivation helps you stay focused and move forward even when things get tough.</p>
  <blockquote style="color:#ffb347;">"Push yourself, because no one else is going to do it for you."</blockquote>
</section>

<section class="full-screen-section" style="background:url('https://i.pinimg.com/originals/a3/03/61/a30361de684f88beac9d626158dcb1a2.gif') center/cover;">
  <h2 style="color:#ffe9dd;">Steps to Grow & Stay Motivated</h2>
  <p style="max-width:680px;">Set goals, build habits, celebrate wins, and learn from setbacks.</p>
  <blockquote style="color:#ffb347;">"Success is the sum of small efforts repeated day in and day out."</blockquote>
</section>

<section class="full-screen-section" style="background:url('https://giffiles.alphacoders.com/219/219692.gif') center/cover;">
  <h2 style="color:#ffb347;">Rotating Wisdom</h2>
  <p id="rotating-quote-box" style="max-width:700px;font-size:20px;color:#fff;margin-top:20px;">
    Growth begins at the end of your comfort zone.
  </p>
</section>

<section class="full-screen-section" style="background:url('https://giffiles.alphacoders.com/916/91698.gif') center/cover;">
  <h2 style="color:#ffb347;">Hidden Dark Wisdom</h2>
  <button onclick="revealDarkWisdom(this)" style="padding:12px 22px;background:#ffb347;border:none;border-radius:6px;cursor:pointer;margin-top:15px;font-weight:bold;color:#102a43;">
    Reveal Truth
  </button>
  <p id="dark-box" style="margin-top:25px;font-size:20px;color:#fff;"></p>
</section>

</main>

<button onclick="randomQuote()" style="position:fixed;bottom:20px;right:20px;background:#ffb347;border:none;padding:12px 20px;border-radius:50px;cursor:pointer;font-weight:bold;color:#102a43;box-shadow:0 0 10px rgba(0,0,0,0.4);">
  Random Quote
</button>

<script src="<?= htmlspecialchars($baseUrl) ?>/js/app.js"></script>

</body>
</html>
