let index = 0;
let totalScore = 0;

let categoryScores = {
    stress: 0,
    anxiety: 0,
    mood: 0,
    control: 0,
    social: 0
};

let maxCategory = {
    stress: 3 * 3,
    anxiety: 4 * 3,
    mood: 4 * 3,
    control: 4 * 3,
    social: 4 * 3
};

function loadQuestion() {
    const q = QUESTIONS[index];

    document.getElementById("question").textContent = q.q;

    const optBox = document.getElementById("options");
    optBox.innerHTML = "";

    q.options.forEach((opt, i) => {
        const btn = document.createElement("button");
        btn.textContent = opt;
        btn.className = "optionBtn";
        btn.onclick = () => select(i);
        optBox.appendChild(btn);
    });

    document.getElementById("progress").textContent =
        `Question ${index + 1} of ${QUESTIONS.length}`;
}

function select(choiceIndex) {
    const q = QUESTIONS[index];


    const score = q.weight[choiceIndex];
    totalScore += score;


    categoryScores[q.category] += score;

    index++;

    if (index < QUESTIONS.length) {
        loadQuestion();
    } else {
        const params = new URLSearchParams({
            s: totalScore,
            t: QUESTIONS.length * 3,
            st: categoryScores.stress,
            an: categoryScores.anxiety,
            mo: categoryScores.mood,
            co: categoryScores.control,
            so: categoryScores.social
        });

        window.location = "results.php?" + params.toString();
    }
}

window.onload = loadQuestion;
