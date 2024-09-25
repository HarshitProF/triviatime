<?php
include("../private.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Prepare for general subject quizzes on TriviaTime Online. Test your knowledge in GK, GS, General Maths, General English, and more with our interactive quizzes.">
    <meta name="keywords" content="General Quiz, GK Quiz, GS Quiz, General Maths, General English, TriviaTime Online">
    <meta name="author" content="TriviaTime Team">
    <title>General Subject Quizzes | TriviaTime Online</title
    <link rel="icon" type="image" href="icons/favicon.jpg">

    <!-- External CSS -->
            <link rel="stylesheet" href="<?= url_for('css/index.css') ?>">


    
</head>

<body>
    <div class="container">
        <header class="header" role="banner">
            <?php 
            include('nav.php');
            ?>
            <div class="intro">
                <h2>General Subject Quizzes</h2>
                <p>Test your knowledge across a variety of general subjects including General Knowledge, General Studies, Maths, and English with our specially curated quizzes.</p>
            </div>
        </header>

        <main role="main">
            <section class="category-quizzes">
                <h3>General Subject Quizzes</h3>
                <div class="quiz-links">
                    <article>
                        <h4><a href="quiz.php?subject=gk&exam=generalQuiz&questions=25&level=medium&lang=English">General Knowledge (GK)</a></h4>
                        <p>Enhance your GK skills with quizzes that cover a wide range of topics.</p>
                    </article>
                    <article>
                        <h4><a href="quiz.php?subject=gs&exam=generalQuiz&questions=25&level=medium&lang=English">General Studies (GS)</a></h4>
                        <p>Prepare for general studies exams with comprehensive quizzes.</p>
                    </article>
                    <article>
                        <h4><a href="quiz.php?subject=maths&exam=generalQuiz&questions=25&level=&lang=English">General Maths</a></h4>
                        <p>Sharpen your maths skills with our specially designed quizzes.</p>
                    </article>
                    <article>
                        <h4><a href="quiz.php?subject=english&exam=generalQuiz&questions=25&level=medium&lang=English">General English</a></h4>
                        <p>Improve your English proficiency with engaging quizzes.</p>
                    </article>
                    <article>
                        <h4><a href="quiz.php?subject=current-affairs&exam=generalQuiz&questions=25&level=medium&lang=English">Current Affairs</a></h4>
                        <p>Stay updated with current events through our quizzes.</p>
                    </article>
                    <article>
                        <h4><a href="quiz.php?subject=logical-reasoning&exam=generalQuiz&questions=25&level=medium7lang=English">Logical Reasoning</a></h4>
                        <p>Test your logical reasoning abilities with challenging quizzes.</p>
                    </article>
                </div>
            </section>
        </main>

        <footer class="footer" role="contentinfo">
            <p>Connect with us: <a href="#">Facebook</a> | <a href="#">Twitter</a> | <a href="#">Instagram</a></p>
            <p><a href="<?= url_for('privacy-policy.php') ?>">Privacy Policy</a> | <a href="<?= url_for('terms-of-service.php') ?>">Terms of Service</a> | <a href="<?= url_for('faq.php') ?>">FAQs</a></p>
        </footer>
    </div
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
