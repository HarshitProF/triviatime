<?php
include("../private.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Prepare for SSC exams with interactive quizzes tailored for SSC CGL, CHSL, and other SSC exams. Test your knowledge and improve your skills with our expertly designed quizzes.">
    <meta name="keywords" content="SSC CGL, SSC CHSL, SSC Exams, Government Exams Quizzes, Practice Questions, TriviaTime Online">
    <meta name="author" content="TriviaTime Team">
    <title>SSC Exams | TriviaTime Online</title>
    <link rel="icon" type="image" href="icons/logo.jpg">
    

    <!-- Schema Markup -->
    <script type="application/ld+json">
    {
    "@context": "https://schema.org",
    "@type": "WebPage",
    "name": "SSC Exams Quizzes",
    "description": "Prepare for SSC exams with interactive quizzes tailored for SSC CGL, CHSL, and other SSC exams. Test your knowledge and improve your skills with our expertly designed quizzes.",
    "url": "https://triviatime.online/ssc",
    "mainEntity": [
        {
            "@type": "Quiz",
            "name": "SSC CGL Math Quiz",
            "url": "https://triviatime.online/quiz.php?subject=maths&exam=ssc-cgl&questions=25&level=medium&lang=English",
            "about": "Test your mathematical skills with SSC CGL practice questions."
        },
        {
            "@type": "Quiz",
            "name": "SSC CGL General Knowledge Quiz",
            "url": "https://triviatime.online/quiz.php?subject=gk&exam=ssc-cgl&questions=25&level=medium&lang=English",
            "about": "Challenge your general knowledge with SSC CGL quizzes."
        },
        {
            "@type": "Quiz",
            "name": "SSC CGL English Quiz",
            "url": "https://triviatime.online/quiz.php?subject=english&exam=ssc-cgl&questions=25&level=medium&lang=English",
            "about": "Enhance your English proficiency with SSC CGL quizzes."
        },
        {
            "@type": "Quiz",
            "name": "SSC CGL Math Quiz in Hindi",
            "url": "https://triviatime.online/quiz.php?subject=maths&exam=ssc-cgl&questions=25&level=medium&lang=Hindi",
            "about": "Test your mathematical skills with SSC CGL practice questions in Hindi."
        },
        {
            "@type": "Quiz",
            "name": "SSC CGL General Knowledge Quiz in Hindi",
            "url": "https://triviatime.online/quiz.php?subject=gk&exam=ssc-cgl&questions=25&level=medium&lang=Hindi",
            "about": "Challenge your general knowledge with SSC CGL quizzes in Hindi."
        },
        {
            "@type": "Quiz",
            "name": "SSC CHSL Math Quiz",
            "url": "https://triviatime.online/quiz.php?subject=maths&exam=ssc&questions=25&level=medium&lang=English",
            "about": "Prepare for SSC CHSL with specialized math quizzes."
        },
        {
            "@type": "Quiz",
            "name": "SSC CHSL General Knowledge Quiz",
            "url": "https://triviatime.online/quiz.php?subject=gk&exam=ssc&questions=25&level=medium&lang=English",
            "about": "Brush up your general knowledge for SSC CHSL."
        },
        {
            "@type": "Quiz",
            "name": "SSC CHSL English Quiz",
            "url": "https://triviatime.online/quiz.php?subject=english&exam=ssc&questions=25&level=medium&lang=English",
            "about": "Strengthen your English for SSC CHSL."
        }
    ]
}

    </script>

    <!-- External CSS -->
    <link rel="stylesheet" href="<?= url_for('css/index.css') ?>">
</head>

<body>
    <div class="container">
        <header class="header" role="banner">
            <nav class="navbar">
                <div class="logo">
                    <h1>TriviaTime Online</h1>
                </div>
                <ul class="nav-links">
                    <li><a href="<?= url_for('index.php') ?>">Home</a></li>
                    <li><a href="<?= url_for('ssc/index.php') ?>">SSC Exams</a></li>
                    <li><a href="<?= url_for('upsc/index.php') ?>">UPSC Exams</a></li>
                    <li><a href="<?= url_for('about.php') ?>">About</a></li>
                    <li><a href="<?= url_for('contact.php') ?>">Contact</a></li>
                    <li><a href="<?= url_for('faq.php') ?>">FAQs</a></li>
                </ul>
            </nav>
            <div class="intro">
                <h2>SSC Exams Quizzes</h2>
                <p>Prepare for SSC exams with quizzes tailored for success in CGL, CHSL, and more. Test your knowledge and improve your skills.</p>
            </div>
        </header>
        
                <div id='ad-container' style="margin:auto;">
            <iframe frameborder='0' id='ad-iframe' marginheight='0' marginwidth='0' name='ad-iframe' scrolling='no' src='https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-1358194775797553&amp;output=html&amp;adk=2062069824&amp;adf=3025194257&amp;lmt=1705043566&amp;w=300&amp;h=250&amp;rafmt=11&amp;format=300x250&amp;url=https://pantip.com/&amp;host=ca-host-pub-1012064661720050' style='width: 300px; height: 250px;'>
                
            </iframe>
        </div>
        
        <main role="main">
            <section class="subject-quizzes">
                <h3>SSC CGL</h3>
                <div class="quiz-links">
                    <article>
                        <h4><a href="/quiz.php?subject=maths&exam=ssc-cgl&questions=25&level=medium&lang=English">SSC CGL Math</a></h4>
                        <p>Test your mathematical skills with SSC CGL practice questions.</p>
                    </article>
                    <article>
                        <h4><a href="/quiz.php?subject=gk&exam=ssc-cgl&questions=25&level=medium&lang=English">SSC CGL General Knowledge</a></h4>
                        <p>Challenge your general knowledge with SSC CGL quizzes.</p>
                    </article>
                    <article>
                        <h4><a href="/quiz.php?subject=english&exam=ssc-cgl&questions=25&level=medium&lang=English">SSC CGL English</a></h4>
                        <p>Enhance your English proficiency with SSC CGL quizzes.</p>
                    </article>
                    <article>
                        <h4><a href="/quiz.php?subject=maths&exam=ssc-cgl&questions=25&level=medium&lang=Hindi">SSC CGL Math in Hindi</a></h4>
                        <p>Test your mathematical skills with SSC CGL practice questions.</p>
                    </article>
                    <article>
                        <h4><a href="/quiz.php?subject=gk&exam=ssc-cgl&questions=25&level=medium&lang=Hindi">SSC CGL General Knowledge in Hindi</a></h4>
                        <p>Challenge your general knowledge with SSC CGL quizzes.</p>
                    </article>
        <div id='ad-container' style="margin:auto;">
            <iframe frameborder='0' id='ad-iframe' marginheight='0' marginwidth='0' name='ad-iframe' scrolling='no' src='https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-1358194775797553&amp;output=html&amp;adk=2062069824&amp;adf=3025194257&amp;lmt=1705043566&amp;w=300&amp;h=250&amp;rafmt=11&amp;format=300x250&amp;url=https://pantip.com/&amp;host=ca-host-pub-1012064661720050' style='width: 300px; height: 250px;'>
                
            </iframe>
        </div>
        </div>
                <h3>SSC CHSL</h3>
                <div class="quiz-links">
                    <article>
                        <h4><a href="/quiz.php?subject=maths&exam=ssc&questions=25&level=medium&lang=English">SSC CHSL Math</a></h4>
                        <p>Prepare for SSC CHSL with specialized math quizzes.</p>
                    </article>
                    <article>
                        <h4><a href="/quiz.php?subject=gk&exam=ssc&questions=25&level=medium&lang=English">SSC CHSL General Knowledge</a></h4>
                        <p>Brush up your GK for SSC CHSL.</p>
                    </article>
                    <article>
                        <h4><a href="/quiz.php?subject=english&exam=ssc&questions=25&level=medium&lang=English">SSC CHSL English</a></h4>
                        <p>Strengthen your English for SSC CHSL.</p>
                    </article>
                </div>
            </section>
        </main>
                <div id='ad-container' style="margin:auto;">
            <iframe frameborder='0' id='ad-iframe' marginheight='0' marginwidth='0' name='ad-iframe' scrolling='no' src='https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-1358194775797553&amp;output=html&amp;adk=2062069824&amp;adf=3025194257&amp;lmt=1705043566&amp;w=300&amp;h=250&amp;rafmt=11&amp;format=300x250&amp;url=https://pantip.com/&amp;host=ca-host-pub-1012064661720050' style='width: 300px; height: 250px;'>
                
            </iframe>
        </div>

        <footer class="footer" role="contentinfo">
            <p>Stay Connected: <a href="#">Facebook</a> | <a href="#">Twitter</a> | <a href="#">Instagram</a> | <a href="#">Newsletter Signup</a></p>
            <p><a href="<?= url_for('privacy-policy.php') ?>">Privacy Policy</a> | <a href="<?= url_for('terms-of-service.php') ?>">Terms of Service</a> | <a href="<?= url_for('faq.php') ?>">FAQs</a></p>
        </footer>
    </div>
</body>
</html>
