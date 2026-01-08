<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>OCD</title>
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
<body style="margin:0;font-family:Arial, sans-serif;background-color:#0b132b;color:#f5f5f5;scroll-behavior:smooth;">
<header style="position:fixed;top:0;left:0;width:100%;z-index:1000;background-color:rgba(11,19,43,0.9);border-bottom:1px solid rgba(255,255,255,0.1);">
  <div style="text-align:center;">
    <span style="font-weight:bold;letter-spacing:2px;font-size:14px;text-transform:uppercase;color:#ffb347;">OCD</span>
  </div>
  <nav style="text-align:center;font-weight:bold;letter-spacing:2px;font-size:14px;text-transform:uppercase;">
    <a href="breathe.php" style="color:#ffb347;text-decoration:none;">Back</a>
  </nav>
</header>
<main style="margin-top:60px;">
<section class="full-screen-section" style="min-height:100vh;display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;opacity:0;transform:translateY(60px);transition:all 0.8s ease-out;background-image:url('https://media.tenor.com/RssEsIMeTnYAAAAM/levi-levi-ackerman.gif');background-size:cover;background-position:center;padding:20px;">
            <h2 style="font-size:38px;color:#ffe1d5;margin-bottom:10px;">What Is OCD?</h2>
            <p style="max-width:700px;font-size:17px;margin-bottom:20px;color:#f5f5f5;">Obsessive-Compulsive Disorder involves intrusive thoughts and repetitive behaviors.</p>
            <ul style="text-align:left;max-width:650px;font-size:17px;line-height:1.6;color:#f5f5f5;"><li>Unwanted thoughts</li><li>Compulsions</li><li>Fear of harm</li><li>Need for certainty</li><li>Mental rituals</li></ul>
        </section>
<section class="full-screen-section" style="min-height:100vh;display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;opacity:0;transform:translateY(60px);transition:all 0.8s ease-out;background-image:url('https://i.pinimg.com/originals/d0/68/07/d068074bd7e28102c0e54a19818ab778.gif');background-size:cover;background-position:center;padding:20px;">
            <h2 style="font-size:38px;color:#ffe1d5;margin-bottom:10px;">How OCD Works</h2>
            <p style="max-width:700px;font-size:17px;margin-bottom:20px;color:#f5f5f5;">OCD creates a cycle of anxiety and relief-seeking behaviors.</p>
            <ul style="text-align:left;max-width:650px;font-size:17px;line-height:1.6;color:#f5f5f5;"><li>Intrusive thought → anxiety</li><li>Compulsion → temporary relief</li><li>Reinforcement of cycle</li></ul>
        </section>
<section class="full-screen-section" style="min-height:100vh;display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;opacity:0;transform:translateY(60px);transition:all 0.8s ease-out;background-image:url('https://i.pinimg.com/originals/70/56/df/7056df34cd0d255ca7be52f20780f004.gif');background-size:cover;background-position:center;padding:20px;">
            <h2 style="font-size:38px;color:#ffe1d5;margin-bottom:10px;">Types of OCD</h2>
            <p style="max-width:700px;font-size:17px;margin-bottom:20px;color:#f5f5f5;">OCD presents in many forms.</p>
            <ul style="text-align:left;max-width:650px;font-size:17px;line-height:1.6;color:#f5f5f5;"><li>Contamination OCD</li><li>Checking OCD</li><li>Harm OCD</li><li>Symmetry OCD</li><li>Pure-O (intrusive thoughts only)</li></ul>
        </section>
<section class="full-screen-section" style="min-height:100vh;display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;opacity:0;transform:translateY(60px);transition:all 0.8s ease-out;background-image:url('https://i.pinimg.com/originals/70/56/df/7056df34cd0d255ca7be52f20780f004.gif');background-size:cover;background-position:center;padding:20px;">
            <h2 style="font-size:38px;color:#ffe1d5;margin-bottom:10px;">Treating OCD</h2>
            <p style="max-width:700px;font-size:17px;margin-bottom:20px;color:#f5f5f5;">OCD improves significantly with proper treatment.</p>
            <ul style="text-align:left;max-width:650px;font-size:17px;line-height:1.6;color:#f5f5f5;"><li>CBT & ERP therapy</li><li>Medication</li><li>Reducing reassurance seeking</li><li>Mindfulness</li><li>Gradual exposure</li></ul>
        </section>
<section style="text-align:center;padding:40px;">
<button  data-onclick-code="window.scrollTo({top:0,behavior:'smooth'});" style="padding:10px 18px;border:none;border-radius:6px;background-color:#ffb347;color:#102a43;font-weight:bold;cursor:pointer;margin-right:10px;">Back to top</button>
<button  data-href="breathe.php" style="padding:10px 18px;border:none;border-radius:6px;background-color:#ffb347;color:#102a43;font-weight:bold;cursor:pointer;">Back</button>
</section>

<section class="full-screen-section" style="min-height:100vh;display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;opacity:0;transform:translateY(60px);transition:all 0.8s ease-out;background-color:#0b132b;">
<button  data-onclick-code="window.scrollTo({top:0,behavior:'smooth'});" style="padding:10px 18px;border:none;border-radius:6px;background-color:#ffb347;color:#102a43;font-weight:bold;cursor:pointer;margin-right:10px;">Back to top</button>
<button  data-href="breathe.php" style="padding:10px 18px;border:none;border-radius:6px;background-color:#ffb347;color:#102a43;font-weight:bold;cursor:pointer;">Back</button>
</section>
</main>
<script src="/js/app.js"></script>
</body>
</html>
