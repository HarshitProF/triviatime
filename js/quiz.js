
let currentQuestionIndex = 0;
let score = 0;
let startTime = Date.now();
let timerInterval,quizData;

const questionElement = document.getElementById("question");
const answersElement = document.getElementById("answers");
const nextButton = document.getElementById("next-btn");
const restartButton = document.getElementById("restart-btn");
const resultElement = document.getElementById("result");
const timerElement = document.getElementById("timer");


function startQuiz() {
    showQuestion(quizData[currentQuestionIndex]);
    updateTimer();
    nextButton.classList.remove("hide");
    restartButton.classList.add("hide");
}

function showQuestion(questionData) {
    questionElement.innerText = questionData.question;
    answersElement.innerHTML = "";
    resultElement.innerText = "";

    questionData.answers.forEach(option => {
        const button = document.createElement("div");
        button.innerText = option;
        button.classList.add("answer");
        button.addEventListener("click", () => selectAnswer(option));
        answersElement.appendChild(button);
    });
}

function selectAnswer(selectedAnswer) {
    const correctAnswer = quizData[currentQuestionIndex].correct;
    const isCorrect = selectedAnswer === correctAnswer;

    if (isCorrect) {
        score++;
    }

    resultElement.innerText = isCorrect ? "Correct!" : `Wrong! The correct answer is "${correctAnswer}".`;

    document.querySelectorAll(".answer").forEach(button => {
        const isAnswerCorrect = button.innerText === correctAnswer;
        button.style.backgroundColor = isAnswerCorrect ? "#4CAF50" : "#F44336";
        button.style.pointerEvents = "none";
    });

    nextButton.classList.remove("hide");
}

function showNextQuestion() {
    currentQuestionIndex++;
    if (currentQuestionIndex < quizData.length) {
        showQuestion(quizData[currentQuestionIndex]);
    } else {
        showFinalResult();
    }
}

function showFinalResult() {
    const totalTime = Math.floor((Date.now() - startTime) / 1000);
    questionElement.innerText = "Quiz Completed!";
    answersElement.innerHTML = `Your score is ${score} out of ${quizData.length}. Total time taken: ${totalTime} seconds.`;
    resultElement.innerText = "";
    nextButton.classList.add("hide");
    restartButton.classList.remove("hide");

    clearInterval(timerInterval);
}

function updateTimer() {
    timerInterval = setInterval(() => {
        const elapsedTime = Math.floor((Date.now() - startTime) / 1000);
        timerElement.innerText = `Time: ${elapsedTime}s`;
    }, 1000);
}

function restartQuiz() {
    currentQuestionIndex = 0;
    score = 0;
    startTime = Date.now();
    startQuiz();
}

nextButton.addEventListener("click", showNextQuestion);
restartButton.addEventListener("click", restartQuiz);
document.addEventListener("DOMContentLoaded",()=>{
    let data= new FormData();
    data.append("subject",subject);
    data.append("action","getQuestions");
    data.append("questions",NumQues);
    data.append("level",level);
    data.append("exam",exam);
    data.append("action","getQuestions");
    data.append("lang",lang);
    fetch(url="handler.php",{
        method : "post",
        body : data
    })
    .then (res=>res.json())
    .then ((res)=>{
        console.log(res);
        quizData= res;
        startQuiz();
    })
    .catch((error)=>{
        console.log(error);
    })
})