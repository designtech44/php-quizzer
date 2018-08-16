<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>PHP Quizzer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
    <header>
        <div class="container">
            <h1>PHP Quizzer</h1>
        </div>
    </header>
    <main>
        <div class="container">
            <h2>You're Done!</h2>
            <p>Congrats! You have completed the test</p>
            <p>Final Score: <?php echo $_SESSION['score']; ?></p>
            <a href="question.php?n=1" class="start">Take Again</a>
    </main>
    <footer>
        <div class="container">
            copyright &copy; 2018, PHP Quizzer
        </div>
    </footer>
</body>
</html>
<?php session_destroy(); ?>