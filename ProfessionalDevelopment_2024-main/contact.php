<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">

    <title>Leave a messgage</title>
</head>
<body>
    <h1>Let's chat!</h1>
<form action="process_contact.php" method="post">
    <label for="name">Your first name:</label>
    <input type="text" id="firstname" name="firstname" placeholder="First" required>
    
    <label for="name">Your last name:</label>
    <input type="text" id="lastname" name="lastname" placeholder="Last" required>

    <label for="email">Your email:</label>
    <input type="email" id="email" name="email" placeholder="example@email.com" required>

    <label for="message">What's up?:</label>
    <textarea id="message" name="message" required></textarea>

    <button type="submit">Send!</button>
</form>
</body>