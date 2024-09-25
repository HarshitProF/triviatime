<?php
include("../private.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Prepare for UPSC Prelims with targeted quizzes on TriviaTime Online. Explore topics like General Studies, General Knowledge, Geography, History, and Hindi.">
    <meta name="keywords" content="UPSC, UPSC Prelims, UPSC Quizzes, General Studies, General Knowledge, Geography, History, Hindi, TriviaTime Online">
    <meta name="author" content="TriviaTime Team">
    <title>UPSC Prelims Quizzes | TriviaTime Online</title
    <link rel="icon" type="image" href="icons/favicon.jpg">

    <!-- Schema Markup -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "name": "UPSC Prelims Quizzes",
        "description": "Enhance your UPSC Prelims preparation with quizzes on General Studies, General Knowledge, Geography, History, and Hindi.",
        "url": "https://triviatime.online/upsc",
        "mainEntity": {
            "@type": "EducationalOrganization",
            "name": "TriviaTime Online",
            "description": "TriviaTime Online provides quizzes for effective preparation for UPSC Prelims and other competitive exams.",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Online",
                "addressCountry": "US"
            }
        }
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
                    <li><a href="<?= url_for('upsc/index.php') ?>">UPSC Exams</a></li>
                    <li><a href="<?= url_for('about.php') ?>">About</a></li>
                    <li><a href="<?= url_for('contact.php') ?>">Contact</a></li>
                    <li><a href="<?= url_for('faq.php') ?>">FAQs</a></li>
                </ul>
            </nav>
            <div class="intro">
                <h2>UPSC Prelims Quizzes</h2>
                <p>Prepare effectively for UPSC Prelims with targeted quizzes on General Studies, General Knowledge, Geography, History, and Hindi.</p>
            </div>
        </header>
        <div id='ad-container' style="margin:auto;">
            <iframe frameborder='0' id='ad-iframe' marginheight='0' marginwidth='0' name='ad-iframe' scrolling='no' src='https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-1358194775797553&amp;output=html&amp;adk=2062069824&amp;adf=3025194257&amp;lmt=1705043566&amp;w=728&amp;h=280&amp;rafmt=11&amp;format=300x250&amp;url=https://pantip.com/&amp;host=ca-host-pub-1012064661720050' style='width: 300px; height: 250px;'>
                
            </iframe>
        </div>
        <div id='ad-container' style="margin:auto;">
            <iframe frameborder='0' id='ad-iframe' marginheight='0' marginwidth='0' name='ad-iframe' scrolling='no' src='https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-1358194775797553&amp;output=html&amp;adk=2062069824&amp;adf=3025194257&amp;lmt=1705043566&amp;w=728&amp;h=280&amp;rafmt=11&amp;format=300x250&amp;url=https://pantip.com/&amp;host=ca-host-pub-1012064661720050' style='width: 300px; height: 250px;'>
                
            </iframe>
        </div>
        <main role="main">
            <section class="category-quizzes">
                <h3>UPSC Prelims General Studies Quizzes</h3>
                <div class="quiz-links">
                    <article>
                        <h4><a href="/quiz.php?subject=general-studies&exam=upsc&questions=25&level=medium&lang=English">General Studies</a></h4>
                        <p>Test your knowledge with General Studies quizzes designed for UPSC Prelims.</p>
                    </article>
                    <article>
                        <h4><a href="/quiz.php?subject=general-knowledge&exam=upsc&questions=25&level=medium&lang=English">General Knowledge</a></h4>
                        <p>Challenge your General Knowledge for the UPSC Prelims exam.</p>
                    </article>
                    <article>
                        <h4><a href="/quiz.php?subject=geography&exam=upsc&questions=25&level=medium7lang=English">Geography</a></h4>
                        <p>Prepare for Geography with quizzes focused on UPSC Prelims.</p>
                    </article>
                    <article>
                        <h4><a href="/quiz.php?subject=history&exam=upsc&questions=25&level=medium&lang=English">History</a></h4>
                        <p>Enhance your History preparation with UPSC Prelims quizzes.</p>
                    </article>
                    <article>
                        <h4><a href="/quiz.php?subject=hindi&exam=upsc&questions=25&level=medium&lang=Englsih">Hindi</a></h4>
                        <p>Improve your Hindi knowledge with quizzes for UPSC Prelims.</p>
                    </article>
                </div>
            </section>
        </main>
        
        <div id='ad-container' style="margin:auto;">
            <iframe frameborder='0' id='ad-iframe' marginheight='0' marginwidth='0' name='ad-iframe' scrolling='no' src='https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-1358194775797553&amp;output=html&amp;adk=2062069824&amp;adf=3025194257&amp;lmt=1705043566&amp;w=728&amp;h=280&amp;rafmt=11&amp;format=300x250&amp;url=https://pantip.com/&amp;host=ca-host-pub-1012064661720050' style='width: 300px; height: 250px;'>
                
            </iframe>
        </div>
        
        <footer class="footer" role="contentinfo">
            <p>Connect with us: <a href="#">Facebook</a> | <a href="#">Twitter</a> | <a href="#">Instagram</a></p>
            <p><a href="<?= url_for('privacy-policy.php') ?>">Privacy Policy</a> | <a href="<?= url_for('terms-of-service.php') ?>">Terms of Service</a> | <a href="<?= url_for('faq.php') ?>">FAQs</a></p>
        </footer>
    </div>
</body>
</html>
