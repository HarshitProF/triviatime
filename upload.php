<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Upload Your File</h1>
        <form action="handler.php" method="post" enctype="multipart/form-data">
        <select  name="level" required>
 
          <!-- Available Options -->
          <option value="easy">Easy</option>
          <option value="medium">Medium</option>
          <option value="hard">Hard</option>
        </select>
        <select name="lang" required>
            <option value="English">English</option>
            <option value="Hindi">Hindi</option>
        </select>
        <select name="exam" required>
 
          <!-- Available Options -->
          <option value="ssc">SSC</option>
          <option value="ssc-cgl">SSC-CGL</option>
          <option value="upsc">UPSC</option>
          <option value="generalQuiz">General Quiz</option>
        </select>
        <select name="subject" required>
 
          <!-- Available Options -->
          <option value="maths">Math</option>
          <option value="english">English</option>
          <option value="gk">Gk</option>
          <option value="history">History</option>
          <option value="geography">Geography</option>
        </select>
            <input type="file" name="file" required>
            <input type="hidden" name="action" value="addQuestions">
            <br>
            <button type="submit">Upload</button>
        </form>
    </div>
</body>
</html>
