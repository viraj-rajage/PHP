<!-- <?php
    echo"hello";
?> -->


<?php
session_start();

// Function to start a new game
function startGame() {
    $_SESSION['secretNumber'] = rand(1, 100);
    $_SESSION['attempts'] = 0;
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the user has guessed the number
    if (isset($_POST['guess'])) {
        $userGuess = (int)$_POST['guess'];
        $_SESSION['attempts']++;

        if ($userGuess == $_SESSION['secretNumber']) {
            $message = "Congratulations! You guessed the number {$_SESSION['secretNumber']} in {$_SESSION['attempts']} attempts.";
            
            startGame();
        } elseif ($userGuess < $_SESSION['secretNumber']) {
            $message = 'Try again! The number is higher.';
        } else {
            $message = 'Try again! The number is lower.';
        }
    }
} else {
    // Start a new game when the page is first loaded
    startGame();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guess the Number Game</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        form {
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <h1>Guess the Number Game</h1>

    <?php if (isset($message)) : ?>
        <p><?php echo $message; ?></p>
    <?php endif; ?>

    <form method="post">
        <label for="guess">Enter your guess (between 1 and 100):</label>
        <input type="number" id="guess" name="guess" required min="1" max="100">
        <button type="submit">Submit Guess</button>
    </form>

</body>
</html>
