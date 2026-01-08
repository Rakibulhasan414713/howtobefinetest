<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PTSD</title>
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
    <span style="font-weight:bold;letter-spacing:2px;font-size:14px;text-transform:uppercase;color:#ffb347;">PTSD</span>
  </div>
  <nav style="text-align:center;font-weight:bold;letter-spacing:2px;font-size:14px;text-transform:uppercase;">
    <a href="breathe.php" style="color:#ffb347;text-decoration:none;">Back</a>
  </nav>
</header>
<main style="margin-top:60px;">
<section class="full-screen-section" style="min-height:100vh;display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;opacity:0;transform:translateY(60px);transition:all 0.8s ease-out; background-image:url('https://i.pinimg.com/originals/8d/cd/34/8dcd340eab8e2229229f73234af9eaf2.gif');
        background-size:cover; background-position:center;">
            <h2 style="font-size:38px;color:#ffe1d5;margin-bottom:10px;">What Is PTSD?</h2>
            <p style="max-width:700px;font-size:17px;margin-bottom:20px;color:#f5f5f5;">Post-Traumatic Stress Disorder (PTSD) develops after experiencing or witnessing a traumatic event.</p>
            <ul style="text-align:left;max-width:650px;font-size:17px;line-height:1.6;color:#f5f5f5;"><li>Flashbacks and intrusive memories</li><li>Avoiding reminders of trauma</li><li>Feeling constantly on edge</li><li>Emotional numbness</li><li>Nightmares</li></ul>
        </section>
<section class="full-screen-section" style="min-height:100vh;display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;opacity:0;transform:translateY(60px);transition:all 0.8s ease-out;background-image:url('https://i.pinimg.com/originals/66/8c/7a/668c7a4e9a231d5e0c807c6a4e488dc5.gif');background-size:cover;background-position:center;padding:20px;">
            <h2 style="font-size:38px;color:#ffe1d5;margin-bottom:10px;">Common Symptoms</h2>
            <p style="max-width:700px;font-size:17px;margin-bottom:20px;color:#f5f5f5;">PTSD affects thoughts, emotions, and the body.</p>
            <ul style="text-align:left;max-width:650px;font-size:17px;line-height:1.6;color:#f5f5f5;"><li>Hypervigilance</li><li>Irritability or anger</li><li>Dissociation</li><li>Negative beliefs about self or world</li><li>Difficulty sleeping</li></ul>
        </section>
<section class="full-screen-section" style="min-height:100vh;display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;opacity:0;transform:translateY(60px);transition:all 0.8s ease-out;background-image:url('https://i.pinimg.com/originals/66/8c/7a/668c7a4e9a231d5e0c807c6a4e488dc5.gif');background-size:cover;background-position:center;padding:20px;">
            <h2 style="font-size:38px;color:#ffe1d5;margin-bottom:10px;">Causes</h2>
            <p style="max-width:700px;font-size:17px;margin-bottom:20px;color:#f5f5f5;">PTSD can develop from many kinds of trauma.</p>
            <ul style="text-align:left;max-width:650px;font-size:17px;line-height:1.6;color:#f5f5f5;"><li>Accidents</li><li>Violence or assault</li><li>War or conflict</li><li>Natural disasters</li><li>Childhood trauma</li></ul>
        </section>
<section class="full-screen-section" style="min-height:100vh;display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;opacity:0;transform:translateY(60px);transition:all 0.8s ease-out;background-image:url('https://i.pinimg.com/originals/8d/cd/34/8dcd340eab8e2229229f73234af9eaf2.gif');background-size:cover;background-position:center;padding:20px;">
            <h2 style="font-size:38px;color:#ffe1d5;margin-bottom:10px;">Healing & Recovery</h2>
            <p style="max-width:700px;font-size:17px;margin-bottom:20px;color:#f5f5f5;">PTSD is treatable, and many people recover with support.</p>
            <ul style="text-align:left;max-width:650px;font-size:17px;line-height:1.6;color:#f5f5f5;"><li>Trauma-focused therapy</li><li>Grounding techniques</li><li>Medication when needed</li><li>Building support systems</li><li>Gradual exposure therapy</li></ul>
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
