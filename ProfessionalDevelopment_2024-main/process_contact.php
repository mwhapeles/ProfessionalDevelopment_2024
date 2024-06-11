<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    
    <title>Leave a messgage</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Process the data (send email, save to database, etc.)

    echo "<h1>Beep beep! Message recieved, $firstname!</h1>
    <p>but also not really because this is just a demo, no information is currently being stored.</p>";
}
?>
</body>


