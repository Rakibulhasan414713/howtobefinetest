<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Anxiety</title>
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
    <span style="font-weight:bold;letter-spacing:2px;font-size:14px;text-transform:uppercase;color:#ffb347;">Anxiety</span>
  </div>
  <nav style="text-align:center;font-weight:bold;letter-spacing:2px;font-size:14px;text-transform:uppercase;">
    <a href="breathe.php" style="color:#ffb347;text-decoration:none;">Back</a>
  </nav>
</header>
<main style="margin-top:60px;">
<section class="full-screen-section" style="min-height:100vh;display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;opacity:0;transform:translateY(60px);transition:all 0.8s ease-out;background-image:url('https://i.pinimg.com/originals/cc/7d/8e/cc7d8e79b28538bfcb2073ea4a525a42.gif');background-size:cover;background-position:center;padding:20px;">
            <h2 style="font-size:38px;color:#ffe1d5;margin-bottom:10px;">What Is Anxiety?</h2>
            <p style="max-width:700px;font-size:17px;margin-bottom:20px;color:#f5f5f5;">Anxiety is the body’s natural response to stress, but chronic anxiety becomes overwhelming.</p>
            <ul style="text-align:left;max-width:650px;font-size:17px;line-height:1.6;color:#f5f5f5;"><li>Racing thoughts</li><li>Panic sensations</li><li>Excessive worry</li><li>Restlessness</li><li>Difficulty concentrating</li></ul>
        </section>
<section class="full-screen-section" style="min-height:100vh;display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;opacity:0;transform:translateY(60px);transition:all 0.8s ease-out;background-image:url('https://i.pinimg.com/originals/5a/d4/1e/5ad41eaaedc1417cbca41057930bde77.gif');background-size:cover;background-position:center;padding:20px;">
            <h2 style="font-size:38px;color:#ffe1d5;margin-bottom:10px;">Types of Anxiety</h2>
            <p style="max-width:700px;font-size:17px;margin-bottom:20px;color:#f5f5f5;">There are multiple forms of anxiety affecting people differently.</p>
            <ul style="text-align:left;max-width:650px;font-size:17px;line-height:1.6;color:#f5f5f5;"><li>Generalized Anxiety Disorder (GAD)</li><li>Panic Disorder</li><li>Social Anxiety</li><li>Phobias</li><li>Health Anxiety</li></ul>
        </section>
<section class="full-screen-section" style="min-height:100vh;display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;opacity:0;transform:translateY(60px);transition:all 0.8s ease-out;background-image:url('https://i.pinimg.com/originals/5b/ce/dc/5bcedcbb53453fe73451b785d8b04c44.gif');background-size:cover;background-position:center;padding:20px;">
            <h2 style="font-size:38px;color:#ffe1d5;margin-bottom:10px;">Common Symptoms</h2>
            <p style="max-width:700px;font-size:17px;margin-bottom:20px;color:#f5f5f5;">Anxiety affects both the mind and body.</p>
            <ul style="text-align:left;max-width:650px;font-size:17px;line-height:1.6;color:#f5f5f5;"><li>Chest tightness</li><li>Fast heartbeat</li><li>Sweating or trembling</li><li>Stomach discomfort</li><li>Feeling unsafe or on edge</li></ul>
        </section>
<section class="full-screen-section" style="min-height:100vh;display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;opacity:0;transform:translateY(60px);transition:all 0.8s ease-out;background-image:url('https://i.pinimg.com/originals/5b/ce/dc/5bcedcbb53453fe73451b785d8b04c44.gif');background-size:cover;background-position:center;padding:20px;">
            <h2 style="font-size:38px;color:#ffe1d5;margin-bottom:10px;">How to Manage Anxiety</h2>
            <p style="max-width:700px;font-size:17px;margin-bottom:20px;color:#f5f5f5;">Anxiety is highly treatable with the right tools.</p>
            <ul style="text-align:left;max-width:650px;font-size:17px;line-height:1.6;color:#f5f5f5;"><li>Breathing exercises</li><li>Grounding techniques</li><li>Regular exercise</li><li>Talking to a therapist</li><li>Limiting caffeine</li></ul>
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
