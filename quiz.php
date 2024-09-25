<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TriviaTime | Quiz</title>
    <link rel="icon" type="image" href="icons/favicon.jpg">
        <link rel="stylesheet" href="css/quiz.css">
</head>
<body>
    <div class="container">
        <!-- Header -->
        <header class="header">
            <div class="logo">
                <h1>TriviaTime</h1>
            </div>
            <div id="timer" class="timer">Time: 0s</div>
        </header>

        <!-- Main Quiz Section -->
        <main role="main">
            <div class="quiz-container">
                <div id="question-container">
                    <div id="question"></div>
                    <div id="answers"></div>
                </div>
                <button id="next-btn" class="button hide">Next</button>
                <button id="restart-btn" class="button hide">Restart</button>
                <div id="result" class="result"></div>
            </div>
            <div id='ad-container' style="margin:auto;">
            <iframe frameborder='0' id='ad-iframe' marginheight='0' marginwidth='0' name='ad-iframe' scrolling='no' src='https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-1358194775797553&amp;output=html&amp;adk=2062069824&amp;adf=3025194257&amp;lmt=1705043566&amp;w=728&amp;h=280&amp;rafmt=11&amp;format=300x250&amp;url=https://pantip.com/&amp;host=ca-host-pub-1012064661720050' style='width: 300px; height: 250px;'>
                
            </iframe>
        </div>
            <!-- Tutorial, Benefits, and Rules Section -->
            <div class="info-section">
                <h3>Tutorial</h3>
                <p>Welcome to TriviaTime! Our quizzes are designed to help you prepare effectively for various competitive exams like SSC, UPSC, UPPSC, and more. Here's how you can make the most out of our quiz platform:</p>
                <ul>
                    <li><strong>Starting the Quiz:</strong> Begin by selecting the quiz subject, number of questions, difficulty level, and the exam type from the options provided. Click on the "Start Quiz" button to initiate the quiz.</li>
                    <li><strong>Answering Questions:</strong> Each question will appear one at a time. Carefully read the question and the available options. Click on the option you believe is correct. Once selected, your answer will be highlighted.</li>
                    <li><strong>Navigating Through Questions:</strong> After answering, click on the "Next" button to move on to the next question. You can revisit previous questions by clicking on the "Previous" button, if enabled.</li>
                    <li><strong>Completing the Quiz:</strong> Once you've answered all the questions, a summary of your results will be displayed. You will see your score along with the correct answers for each question.</li>
                    <li><strong>Restarting the Quiz:</strong> If you wish to try again, click on the "Restart" button to begin a new session with a fresh set of questions.</li>
                </ul>

                <h3>Benefits</h3>
                <p>Taking quizzes on TriviaTime offers numerous advantages:</p>
                <ul>
                    <li><strong>Targeted Preparation:</strong> Quizzes are tailored to the specific exams and subjects you're preparing for, ensuring relevant practice.</li>
                    <li><strong>Enhanced Retention:</strong> Regular quizzing reinforces your knowledge and helps with long-term retention of important concepts.</li>
                    <li><strong>Self-Assessment:</strong> Identify your strengths and weaknesses with detailed results, allowing you to focus on areas that need improvement.</li>
                    <li><strong>Real-Time Feedback:</strong> Instant feedback on your answers helps you understand where you went wrong, promoting learning through mistakes.</li>
                    <li><strong>Time Management:</strong> Timed quizzes help you improve your speed and accuracy, crucial for excelling in competitive exams.</li>
                </ul>

                <h3>Rules</h3>
                <p>To ensure a fair and effective quiz experience, please adhere to the following rules:</p>
                <ul>
                    <li><strong>No External Help:</strong> Answer the questions to the best of your ability without seeking external help. This is important for an accurate assessment.</li>
                    <li><strong>Time Management:</strong> Pay attention to the timer. It’s essential to complete each quiz within the allocated time to simulate real exam conditions.</li>
                    <li><strong>One Attempt at a Time:</strong> You can only answer each question once per quiz session. Make sure you are confident in your answer before moving on.</li>
                    <li><strong>Honesty is Key:</strong> Be honest with your attempts. The quizzes are meant to help you learn and improve, so give it your best shot without shortcuts.</li>
                    <li><strong>Review Your Results:</strong> After the quiz, carefully review the correct answers and explanations to understand your mistakes and learn from them.</li>
                </ul>
            </div>
        </main>

        <!-- Footer -->
        <footer class="footer">
            <p>&copy; 2024 TriviaTime. All rights reserved.</p>
            <p><a href="privacy-policy.php">Privacy Policy</a> | <a href="terms-of-service.php">Terms of Service</a></p>
        </footer>
    </div>
      <!-- JavaScript to handle the quiz logic -->
<script type="text/javascript">
var subject = "<?= $_REQUEST['subject'] ?>";
var NumQues = "<?= $_REQUEST['questions'] ?>";
var level = "<?= $_REQUEST['level'] ?>";
var exam = "<?= $_REQUEST['exam'] ?>";
var lang = "<?= $_REQUEST['lang'] ?>";
</script>
<script src="js/quiz.js"></script>
</body>
</html>
