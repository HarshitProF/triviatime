<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Question Quiz</title>
    <style>
        /* Basic CSS styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            text-align: center;
        }

        .initial-screen {
            background-color: #3498db;
            color: white;
            padding: 20px;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .initial-screen:hover {
            background-color: #2980b9;
        }

        .quiz-container {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
            text-align: center;
            display: none; /* Initially hidden */
        }

        .quiz-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .timer {
            font-weight: bold;
            color: #333;
        }

        .answer-options button {
            background-color: #3498db;
            color: white;
            padding: 10px;
            margin: 5px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .answer-options button:hover {
            background-color: #2980b9;
        }

        .result {
            margin-top: 15px;
            font-size: 1.2em;
        }

        .quiz-button {
            padding: 10px 20px;
            background-color: #2ecc71;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 15px;
        }

        .quiz-button:hover {
            background-color: #27ae60;
        }

        .hide {
            display: none;
        }
    </style>
</head>
<body>

<!-- Initial screen -->
<div id="initial-screen" class="initial-screen">
    <h2>Click here to start the quiz!</h2>
</div>

<!-- Quiz container -->
<div id="quiz-container" class="quiz-container hide">
    <header class="quiz-header">
        <h2 id="quiz-title">Single Question Quiz</h2>
        <div id="timer" class="timer">Time: 0s</div>
    </header>

    <!-- Hard-coded question -->
    <div id="question-container">
        <div id="question" class="question-text">What is the capital of Japan?</div>
        <div id="answers" class="answer-options">
            <button class="answer-button">Tokyo</button>
            <button class="answer-button">Beijing</button>
            <button class="answer-button">Seoul</button>
            <button class="answer-button">Bangkok</button>
        </div>
    </div>

    <button id="restart-btn" class="quiz-button hide">Restart</button>
    <div id="result" class="result"></div>
</div>

<!-- JavaScript -->
<script>
    let startTime, answerTime, timerInterval;
    const correctAnswer = "Tokyo"; // Hard-coded correct answer

    document.addEventListener("DOMContentLoaded", () => {
        const initialScreen = document.getElementById("initial-screen");
        const quizContainer = document.getElementById("quiz-container");
        const answerButtons = document.querySelectorAll(".answer-button");
        const resultElement = document.getElementById("result");
        const restartButton = document.getElementById("restart-btn");
        const timerElement = document.getElementById("timer");

        // Show quiz on click
        initialScreen.addEventListener("click", () => {
            initialScreen.classList.add("hide");
            quizContainer.classList.remove("hide"); // Show quiz container
            startQuiz();
        });

        // Start quiz function
        function startQuiz() {
            startTime = Date.now();
            resultElement.innerText = '';
            updateTimer();

            answerButtons.forEach(button => {
                button.addEventListener("click", () => selectAnswer(button));
            });
        }

        // Handle answer selection
        function selectAnswer(button) {
            answerTime = Math.floor((Date.now() - startTime) / 1000); // Time taken for answer
            const selectedAnswer = button.innerText;
            const isCorrect = selectedAnswer === correctAnswer;

            // Disable all buttons and show result
            answerButtons.forEach(btn => {
                btn.disabled = true;
                btn.style.pointerEvents = "none";
                if (btn.innerText === correctAnswer) {
                    btn.style.backgroundColor = "#2ecc71"; // Correct answer color
                } else if (btn.innerText === selectedAnswer && !isCorrect) {
                    btn.style.backgroundColor = "#e74c3c"; // Wrong answer color
                }
            });

            resultElement.innerText = isCorrect
                ? `Correct! Time taken: ${answerTime} seconds.`
                : `Wrong! The correct answer is ${correctAnswer}. Time taken: ${answerTime} seconds.`;

            startFetchingCountdown();
        }

        // Countdown after answering
        function startFetchingCountdown() {
            resultElement.innerText = "We are fetching the question for you...";
            let countdownTime = 15;
            const countdownInterval = setInterval(() => {
                resultElement.innerText = `We are fetching the question for you... (${countdownTime}s)`;
                countdownTime--;

                if (countdownTime < 0) {
                    clearInterval(countdownInterval);
                    resultElement.innerText = "Answer the question given below!";
                    restartButton.classList.remove("hide");
                }
            }, 1000);
        }

        // Restart quiz
        restartButton.addEventListener("click", () => {
            location.reload(); // Reload the page to restart
        });

        // Timer update
        function updateTimer() {
            timerInterval = setInterval(() => {
                const elapsedTime = Math.floor((Date.now() - startTime) / 1000);
                timerElement.innerText = `Time: ${elapsedTime}s`;
            }, 1000);
        }
    });
</script>

</body>
</html>
