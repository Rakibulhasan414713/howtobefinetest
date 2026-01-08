<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Mental Health Result</title>
<link rel="stylesheet" href="css/style.css">
<style>
.result-box {
  width: 60%;
  margin: auto;
  background: #ffffffd1;
  padding: 20px;
  border-radius: 12px;
  box-shadow: 0 0 10px #999;
}

.bar {
  height: 20px;
  background: linear-gradient(to right, #6ad, #48a);
  border-radius: 10px;
}

.section {
  margin-bottom: 20px;
}
</style>
</head>
<body>

<div class="result-box">
  <h1>Your Mental Health Report</h1>

  <p id="overall"></p>

  <div class="section">
    <h3>Stress & Overwhelm</h3>
    <div id="stressBar" class="bar"></div>
    <p id="stressText"></p>
  </div>

  <div class="section">
    <h3>Anxiety & Worry</h3>
    <div id="anxietyBar" class="bar"></div>
    <p id="anxietyText"></p>
  </div>

  <div class="section">
    <h3>Mood & Depression</h3>
    <div id="moodBar" class="bar"></div>
    <p id="moodText"></p>
  </div>

  <div class="section">
    <h3>Emotional Control & Self-Esteem</h3>
    <div id="controlBar" class="bar"></div>
    <p id="controlText"></p>
  </div>

  <div class="section">
    <h3>Social Support & Connection</h3>
    <div id="socialBar" class="bar"></div>
    <p id="socialText"></p>
  </div>

</div>

<script>
function interpret(score, max) {
  let percent = (score / max) * 100;
  if (percent < 25) return "Low";
  if (percent < 50) return "Mild";
  if (percent < 75) return "Moderate";
  return "High";
}

const url = new URLSearchParams(window.location.search);

const total = url.get("s");
const maxTotal = url.get("t");

document.getElementById("overall").textContent =
  `Overall Score: ${total}/${maxTotal}`;

function render(category, score, max) {
  const bar = document.getElementById(category + "Bar");
  const text = document.getElementById(category + "Text");

  const percent = (score / max) * 100;
  bar.style.width = percent + "%";

  text.textContent = interpret(score, max) + " (" + score + "/" + max + ")";
}

render("stress", url.get("st"), 9);
render("anxiety", url.get("an"), 12);
render("mood", url.get("mo"), 12);
render("control", url.get("co"), 12);
render("social", url.get("so"), 12);
</script>

<script src="/js/app.js"></script>
</body>
</html>
