<!DOCTYPE html>
<html>
    <head>
        <title>Homework 2 Part 1</title>
    </head>
    <body>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        http_response_code(200);
        echo "<h1>Welcome ".$_POST['emailValue']."</h1></body></html>";
        exit;
    }?>
        <button onclick="alert('You are a human being!')">Magic Button</button>
        <p>
<form action="" method="post">
    <label for="etext">E-Mail:</label>
    <input type="email" id="etext" name="emailValue" value="example@example.net"><br>
    <label for="ptext">Password:</label>
    <input type="password" id="ptext" name="passValue"> <br>
    <input type="submit" value="Register">
</form>
        </p>
    </body>
</html>