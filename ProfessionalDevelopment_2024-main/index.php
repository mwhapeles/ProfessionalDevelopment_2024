<?php
    $min=1;
    $max=99;
    $number = 0;

    if (!isset($_COOKIE['number'])) {
        $number = rand($min, $max);
        setcookie('number', strval($number));
    } else {
        $number = (int)$_COOKIE['number'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Contact Page</title>
</head>
<body>
    <header>
        <h1>Want to be besties?</h1>
    </header>
    <nav>
        <ul>
           <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
    <section>
        <div> 
        <?php 
           echo("<p>Want to play a game? Guess the number! The range is from $min to $max.</p>");
            if(isset($_POST['submit'])){
               
                $guess = $_POST['guess'];
                if($guess > $number){
                    echo "<p>Almost! Your guess was too high! Try again!</p>";
                } elseif($guess < $number){
                    echo "<p>Think bigger! Try again!</p>";
                } else {
                    echo "<p>You guessed it! The number was $number! Clear your cookie cache to play again!</p>";

                }
            } 
            ?>

            <form action="" method="post">
                <label for="guess">Enter your guess:</label>
                <input type="number" id="guess" name="guess" required>
                <button type="submit" name="submit">Submit</button>
    </div>
        <?php
        $current_date = date("Y-m-d");
        echo "<p>Today's date is $current_date</p>";
    ?>
    </section>
    <footer>
        <p>&copy; 2024 Your Website</p>
    </footer>
</body>
</html>