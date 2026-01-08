<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mood Tracker</title>

  <style>
    body {
      font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
      background: url("https://img.wattpad.com/1f456f8179e6174c39a5df4d0373bd04e16e6b25/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f776174747061642d6d656469612d736572766963652f53746f7279496d6167652f63616d68762d333032307a5a51773d3d2d3839323735323032372e313635323530613962366435363032633333343139373335393838382e676966")
        no-repeat center center fixed;
      background-size: cover;
      margin: 0;
      padding: 0;
      color: #000;
      display: flex;
      justify-content: 0;
      align-items: flex-start;
      min-height: 100vh;
    }


  </style>
</head>

<body>

  <div class="container">
    <h1></h1>


    <section class="section">
      <h2>How are you feeling today?</h2>
      <select id="mood-select"  data-onchange-code="updateMood()">
        <option>😊 Happy</option>
        <option>😞 Sad</option>
        <option>😐 Okay</option>
        <option>😫 Anxious</option>
        <option>😡 Angry</option>
        <option>😴 Tired</option>
      </select>

      <p>Your mood: <span id="current-mood">Not selected</span></p>
    </section>


    <section class="section">
      <h2>Write Your Thoughts</h2>
      <textarea id="journal" rows="5" placeholder="Write here..."></textarea>
      <button  data-onclick-code="saveJournal()">Save Entry</button>
      <p id="save-status" style="color: green; font-weight: bold;"></p>
    </section>


    <section class="section">
      <h2>Self-Care Tip</h2>
      <p id="tip-text">Click the button to get a tip.</p>
      <button  data-onclick-code="showTip()">Show Tip</button>
    </section>


    <section class="section">
      <h2>Motivational Quote</h2>
      <p id="quote-text">"Your quote will appear here."</p>
      <button  data-onclick-code="showQuote()">New Quote</button>
    </section>
  </div>

  <script>

    window.onload = function () {
      let savedMood = localStorage.getItem("savedMood");
      if (savedMood) {
        document.getElementById("current-mood").innerText = savedMood;
        document.getElementById("mood-select").value = savedMood;
      }

      let savedEntry = localStorage.getItem("journalEntry");
      if (savedEntry) {
        document.getElementById("journal").value = savedEntry;
      }
    };


    function updateMood() {
      var mood = document.getElementById("mood-select").value;
      document.getElementById("current-mood").innerText = mood;
      localStorage.setItem("savedMood", mood);
    }


    function saveJournal() {
      var entry = document.getElementById("journal").value;
      localStorage.setItem("journalEntry", entry);
      document.getElementById("save-status").innerText = "Journal saved!";
      setTimeout(() => {
        document.getElementById("save-status").innerText = "";
      }, 2000);
    }


    var tips = [
      "Take a 10-minute walk outside.",
      "Drink a glass of water.",
      "Write down 3 things you're grateful for.",
      "Try 5 minutes of deep breathing.",
      "Listen to your favorite music.",
      "Call a friend or loved one."
    ];

    function showTip() {
      var randomTip = tips[Math.floor(Math.random() * tips.length)];
      document.getElementById("tip-text").innerText = randomTip;
    }


    var quotes = [
      "You are stronger than you think.",
      "This too shall pass.",
      "Be kind to yourself.",
      "Progress, not perfection.",
      "You've survived 100% of your worst days."
    ];

    function showQuote() {
      var randomQuote = quotes[Math.floor(Math.random() * quotes.length)];
      document.getElementById("quote-text").innerText = randomQuote;
    }
  </script>

<script src="/js/app.js"></script>
</body>
</html>
