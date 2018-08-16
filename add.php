<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
            <h2>Add A Question</h2>
            <?php 
                if(isset($msg)) {
                    echo '<p>'.$msg.'</p>';
                }
            ?>
            <form method="post" action="add.php">
                <p>
                    <label>Question Number: </label>
                    <input type="number" value="<?php echo $next; ?>" name="question_number" />
                </p>
                <p>
                    <label>Question Text: </label>
                    <input type="text" name="question_text" />
                </p>
                <p>
                    <label>Choice #1: </label>
                    <input type="text" name="choice1" />
                </p>
                <p>
                    <label>Choice #2: </label>
                    <input type="text" name="choice2" />
                </p>
                <p>
                    <label>Choice #3: </label>
                    <input type="text" name="choice3" />
                </p>
                <p>
                    <label>Choice #4: </label>
                    <input type="text" name="choice4" />
                </p>
                <p>
                    <label>Choice #5: </label>
                    <input type="text" name="choice5" />
                </p>
                <p>
                    <label>Correct Choice number: </label>
                    <input type="number" name="correct_choice" />
                </p>
                <p>
                    <input type="submit" name="submit" value="Submit" />
                </p>
            </form>
        </div>
    </main>
    <footer>
        <div class="container">
            copyright &copy; 2018, PHP Quizzer
        </div>
    </footer>
    
</body>
</html>