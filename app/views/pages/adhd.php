<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Understanding ADHD – Full Screen Sections</title>

  <script>

    window.addEventListener("load", function () {
      var sections = document.querySelectorAll(".full-screen-section");

      function animateSections() {
        var triggerPoint = window.innerHeight * 0.7;
        sections.forEach(sec => {
          var rect = sec.getBoundingClientRect();
          if (rect.top < triggerPoint && rect.bottom > 0) {
            sec.style.opacity = "1";
            sec.style.transform = "translateY(0)";
          }
        });
      }

      window.addEventListener("scroll", animateSections);
      animateSections();
    });
  </script>

</head>

<body style="margin:0; font-family:Arial, sans-serif; background-color:#0b132b; color:#f5f5f5; scroll-behavior:smooth;">


  <header style="
    position:fixed; top:0; left:0; width:100%; z-index:1000;
    background-color:rgba(11,19,43,0.9);
    border-bottom:1px solid rgba(255,255,255,0.1);
  ">
    <div style="text-align:center;">
      <span style="
        font-weight:bold; letter-spacing:2px; font-size:14px;
        text-transform:uppercase; color:#ffb347;
      ">
        ADHD Awareness & Understanding
      </span>
    </div>
    <nav style="
      text-align:center; font-weight:bold; letter-spacing:2px;
      font-size:14px; text-transform:uppercase;
    ">
      <a href="index.php" style="color:#ffb347; text-decoration:none;">Home</a>
    </nav>
  </header>

  <main style="margin-top:60px;">


    <section class="full-screen-section"
      style="
        min-height:100vh;
        display:flex; flex-direction:column;
        align-items:center; justify-content:center;
        text-align:center;
        opacity:0; transform:translateY(60px);
        transition:all 0.8s ease-out;
        background-image:url('https://images.steamusercontent.com/ugc/2274944075027751518/0EAF0C6FBEB404E1C9DBA6E8C089065BF47131E5/?imw=5000&imh=5000&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=false');
        background-size:cover; background-position:center;
      "
    >
      <h1 style="font-size:46px; margin:0 15px 12px; letter-spacing:3px;
                 text-transform:uppercase; color:#ffe1d5;">
        What Is ADHD?
      </h1>

      <p style="font-size:17px; max-width:650px; margin:0 15px 20px;">
        ADHD (Attention-Deficit/Hyperactivity Disorder) is a neurological
        condition affecting focus, impulse control, emotional regulation,
        and executive functioning. It does not mean someone is lazy —
        their brain works differently.
      </p>

      <blockquote style="font-size:19px; font-style:italic;
                         color:#ffb347; max-width:650px;">
        "ADHD is not a lack of attention — it’s a struggle to control where attention goes."
      </blockquote>
    </section>


    <section class="full-screen-section"
      style="
        min-height:100vh; display:flex; flex-direction:column;
        align-items:center; justify-content:center; text-align:center;
        opacity:0; transform:translateY(60px);
        transition:all 0.8s ease-out;
        background-image:url('https://i.imgur.com/iPHuWIA.gif');
        background-size:cover; background-position:center;
      "
    >
      <h2 style="font-size:38px; color:#ffdcc2;">Common ADHD Challenges</h2>

      <p style="font-size:17px; max-width:680px; margin:0 15px 20px;">
        ADHD affects everyone differently, but common struggles include:
      </p>

      <ul style="text-align:left; max-width:600px;
                 font-size:17px; line-height:1.6;">
        <li>Difficulty focusing or staying on tasks</li>
        <li>Mental overwhelm or feeling “scattered”</li>
        <li>Poor time management / time blindness</li>
        <li>Impulsivity</li>
        <li>Forgetfulness and losing items</li>
        <li>Emotional sensitivity and mood swings</li>
        <li>Restlessness or hyperactivity</li>
      </ul>

      <blockquote style="font-size:18px; font-style:italic; color:#ffb347;">
        "It’s not that I can’t focus — it’s that I can’t choose what to focus on."
      </blockquote>
    </section>


    <section class="full-screen-section"
      style="
        min-height:100vh; display:flex; flex-direction:column;
        align-items:center; justify-content:center; text-align:center;
        opacity:0; transform:translateY(60px);
        transition:all 0.8s ease-out;
        background-image:url('');
        background-size:cover; background-position:center;
      "
    >
      <h2 style="font-size:38px; color:#ffdcc2;">How ADHD Affects Daily Life</h2>

      <p style="font-size:17px; max-width:700px; margin:0 15px 20px;">
        ADHD influences school, relationships, confidence, and routines.
        These challenges come from brain wiring, not personal failure.
      </p>

      <ul style="text-align:left; max-width:650px;
                 font-size:17px; line-height:1.6;">
        <li>Procrastination or difficulty starting tasks</li>
        <li>Feeling misunderstood or judged</li>
        <li>Trouble organizing belongings</li>
        <li>Rejection sensitivity (RSD)</li>
        <li>Struggling with consistency</li>
        <li>Sleep issues</li>
      </ul>
    </section>


    <section class="full-screen-section"
      style="
        min-height:100vh; display:flex; flex-direction:column;
        align-items:center; justify-content:center; text-align:center;
        opacity:0; transform:translateY(60px);
        transition:all 0.8s ease-out;
        background-image:url('');
        background-size:cover; background-position:center;
      "
    >
      <h2 style="font-size:38px; color:#ffe9dd;">ADHD Strengths</h2>

      <ul style="text-align:left; max-width:650px;
                 font-size:17px; line-height:1.6;">
        <li>Creativity and imagination</li>
        <li>Hyperfocus on goals and passions</li>
        <li>High energy and enthusiasm</li>
        <li>Unique ideas and problem-solving</li>
        <li>Deep empathy</li>
      </ul>
    </section>


    <section class="full-screen-section"
      style="
        min-height:100vh; display:flex; flex-direction:column;
        align-items:center; justify-content:center; text-align:center;
        opacity:0; transform:translateY(60px);
        transition:all 0.8s ease-out; background-color:#0b132b;
      "
    >
      <h2 style="font-size:38px; color:#ffe9dd;">How to Manage ADHD</h2>

      <ul style="text-align:left; max-width:650px;
                 font-size:17px; line-height:1.7;">
        <li>Professional diagnosis & support</li>
        <li>Therapy (CBT, ADHD coaching)</li>
        <li>Medication (when prescribed)</li>
        <li>Structured routines</li>
        <li>Using planners, timers, reminders</li>
        <li>Breaking tasks into small steps</li>
        <li>Reducing distractions</li>
        <li>Regular exercise</li>
        <li>Healthy sleep habits</li>
      </ul>
    </section>


    <section class="full-screen-section"
      style="
        min-height:100vh; display:flex; flex-direction:column;
        align-items:center; justify-content:center; text-align:center;
        opacity:0; transform:translateY(60px);
        transition:all 0.8s ease-out; background-color:#0b132b;
      "
    >
      <h2 style="font-size:38px; color:#ffe9dd;">Daily ADHD Tips</h2>

      <ul style="text-align:left; max-width:650px;
                 font-size:17px; line-height:1.6;">
        <li>Use timers (Pomodoro)</li>
        <li>Keep workspace simple</li>
        <li>Try “body doubling”</li>
        <li>Move often to reset focus</li>
        <li>Write tasks immediately</li>
        <li>Create consistent item locations</li>
        <li>Reward small wins</li>
      </ul>

      <button  data-onclick-code="window.scrollTo({top:0, behavior:'smooth'});"
        style="padding:10px 18px; border:none; border-radius:6px;
               background-color:#ffb347; color:#102a43; font-weight:bold;
               cursor:pointer; margin-right:10px;">
        Back to top
      </button>

      <button  data-href="breathe.php"
        style="padding:10px 18px; border:none; border-radius:6px;
               background-color:#ffb347; color:#102a43; font-weight:bold;
               cursor:pointer;">
        Back
      </button>
    </section>

  </main>

<script src="/js/app.js"></script>
</body>
</html>
