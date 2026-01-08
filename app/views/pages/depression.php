<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Depression</title>
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
    <span style="font-weight:bold;letter-spacing:2px;font-size:14px;text-transform:uppercase;color:#ffb347;">Depression</span>
  </div>
  <nav style="text-align:center;font-weight:bold;letter-spacing:2px;font-size:14px;text-transform:uppercase;">
    <a href="breathe.php" style="color:#ffb347;text-decoration:none;">Back</a>
  </nav>
</header>
<main style="margin-top:60px;">
<section class="full-screen-section" style="min-height:100vh;display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;opacity:0;transform:translateY(60px);transition:all 0.8s ease-out;background-image:url('https://i.pinimg.com/originals/2b/36/c8/2b36c84f539b2116cb6f8dbcb6e04e37.gif');background-size:cover;background-position:center;padding:20px;">
            <h2 style="font-size:38px;color:#ffe1d5;margin-bottom:10px;">What Is Depression?</h2>
            <p style="max-width:700px;font-size:17px;margin-bottom:20px;color:#f5f5f5;">Depression affects mood, behavior, and physical health.</p>
            <ul style="text-align:left;max-width:650px;font-size:17px;line-height:1.6;color:#f5f5f5;"><li>Persistent sadness</li><li>Loss of interest</li><li>Fatigue</li><li>Changes in sleep</li><li>Feeling worthless</li></ul>
        </section>
<section class="full-screen-section" style="min-height:100vh;display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;opacity:0;transform:translateY(60px);transition:all 0.8s ease-out;background-image:url('https://gifdb.com/images/high/90s-anime-498-x-357-gif-yui9hla0nne2t4ks.gif');background-size:cover;background-position:center;padding:20px;">
            <h2 style="font-size:38px;color:#ffe1d5;margin-bottom:10px;">How Depression Feels</h2>
            <p style="max-width:700px;font-size:17px;margin-bottom:20px;color:#f5f5f5;">Depression is more than sadness.</p>
            <ul style="text-align:left;max-width:650px;font-size:17px;line-height:1.6;color:#f5f5f5;"><li>Numbness</li><li>Hopelessness</li><li>Overthinking</li><li>Isolation</li><li>Low energy</li></ul>
        </section>
<section class="full-screen-section" style="min-height:100vh;display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;opacity:0;transform:translateY(60px);transition:all 0.8s ease-out;background-image:url('https://i.pinimg.com/originals/3d/4a/f0/3d4af0e3f4dc6540b60aebe3c8a1d2b6.gif');background-size:cover;background-position:center;padding:20px;">
            <h2 style="font-size:38px;color:#ffe1d5;margin-bottom:10px;">Common Causes</h2>
            <p style="max-width:700px;font-size:17px;margin-bottom:20px;color:#f5f5f5;">Depression can have many origins.</p>
            <ul style="text-align:left;max-width:650px;font-size:17px;line-height:1.6;color:#f5f5f5;"><li>Genetics</li><li>Stress</li><li>Hormonal changes</li><li>Trauma</li><li>Chronic illness</li></ul>
        </section>
<section class="full-screen-section" style="min-height:100vh;display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;opacity:0;transform:translateY(60px);transition:all 0.8s ease-out;background-image:url('https://i.pinimg.com/originals/3d/4a/f0/3d4af0e3f4dc6540b60aebe3c8a1d2b6.gif');background-size:cover;background-position:center;padding:20px;">
            <h2 style="font-size:38px;color:#ffe1d5;margin-bottom:10px;">Paths to Recovery</h2>
            <p style="max-width:700px;font-size:17px;margin-bottom:20px;color:#f5f5f5;">Depression is treatable with the right support.</p>
            <ul style="text-align:left;max-width:650px;font-size:17px;line-height:1.6;color:#f5f5f5;"><li>Therapy</li><li>Medication</li><li>Daily routines</li><li>Social support</li><li>Reducing self-criticism</li></ul>
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
