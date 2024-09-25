<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Get in touch with the TriviaTime Online team. Contact us for support, feedback, or general inquiries.">
    <meta name="keywords" content="Contact Us, Support, TriviaTime Online">
    <meta name="author" content="TriviaTime Team">
    <title>Contact Us | TriviaTime Online</title>
    <link rel="icon" type="image" href="icons/favicon.jpg">

    <!-- In-Page CSS -->
    <link rel="stylesheet" href="css/pages.css">
</head>
<body>
    <div class="container">
        <h1>Contact Us</h1>

        <p>We'd love to hear from you! Whether you have a question about our quizzes, need assistance, or just want to provide feedback, feel free to get in touch using the information below.</p>

        <div class="contact-info">
            <h2>Support</h2>
            <p>Email: <a href="mailto:support@triviatime.online">support@triviatime.online</a></p>
        </div>

        <div class="contact-info">
            <h2>Feedback</h2>
            <p>Email: <a href="mailto:feedback@triviatime.online">feedback@triviatime.online</a></p>
        </div>

        <div class="contact-info">
            <h2>General Inquiries</h2>
            <p>Email: <a href="mailto:info@triviatime.online">info@triviatime.online</a></p>
        </div>

        <form action="submit_form.php" method="post">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Your Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Your Message:</label>
            <textarea id="message" name="message" rows="6" required></textarea>

            <input type="submit" value="Send Message">
        </form>

        <div class="footer">
            <p>&copy; 2024 TriviaTime Online. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
