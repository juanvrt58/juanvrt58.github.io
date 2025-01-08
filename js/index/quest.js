document.addEventListener("DOMContentLoaded", () => {
    const questions = [
      {
        text: "¿Cuál es el tamaño de tu evento?",
        answers: [
          { text: "Pequeño (10-30 personas)", value: "small" },
          { text: "Mediano (31-100 personas)", value: "medium" },
          { text: "Grande (100+ personas)", value: "large" },
        ],
      },
      {
        text: "¿Cuál es tu presupuesto aproximado?",
        answers: [
          { text: "Bajo (menos de $300.000)", value: "low" },
          { text: "Moderado ($300.000 - $800.000)", value: "medium" },
          { text: "Alto (más de $800.000)", value: "high" },
        ],
      },
      {
        text: "¿Qué tipo de comida prefieres?",
        answers: [
          { text: "Finger food y canapés", value: "finger" },
          { text: "Buffet tradicional", value: "buffet" },
          { text: "Cena formal", value: "formal" },
        ],
      },
    ];
  
    let currentQuestion = 0;
    let scores = {
      small: 0,
      medium: 0,
      large: 0,
      low: 0,
      high: 0,
      finger: 0,
      buffet: 0,
      formal: 0,
    };
  
    const questionText = document.getElementById("question-text");
    const answerList = document.querySelector(".answer-list");
    const resultSection = document.getElementById("result");
    const resultText = document.getElementById("result-text");
    const restartBtn = document.getElementById("restart-btn");
  
    function showQuestion(index) {
      const question = questions[index];
      questionText.textContent = question.text;
      answerList.innerHTML = ""; // Limpia las respuestas
  
      question.answers.forEach((answer) => {
        const button = document.createElement("button");
        button.textContent = answer.text;
        button.classList.add("answer-btn");
        button.setAttribute("data-value", answer.value);
        answerList.appendChild(button);
      });
    }
  
    function showResult() {
      let eventType = "";
  
      if (scores.large >= scores.medium && scores.large >= scores.small) {
        eventType = "Un gran evento corporativo o boda.";
      } else if (scores.medium >= scores.small) {
        eventType = "Un evento de tamaño mediano, ideal para cumpleaños o aniversarios.";
      } else {
        eventType = "Un evento íntimo, perfecto para reuniones familiares.";
      }
  
      resultText.textContent = eventType;
      resultSection.classList.remove("hidden");
    }
  
    function resetQuiz() {
      currentQuestion = 0;
      scores = { small: 0, medium: 0, large: 0, low: 0, high: 0, finger: 0, buffet: 0, formal: 0 };
      resultSection.classList.add("hidden");
      showQuestion(currentQuestion);
    }
  
    answerList.addEventListener("click", (e) => {
      if (e.target.classList.contains("answer-btn")) {
        const value = e.target.getAttribute("data-value");
        scores[value]++;
  
        currentQuestion++;
        if (currentQuestion < questions.length) {
          showQuestion(currentQuestion);
        } else {
          showResult();
        }
      }
    });
  
    restartBtn.addEventListener("click", resetQuiz);
  
    // Inicializa el cuestionario
    showQuestion(currentQuestion);
  });
  