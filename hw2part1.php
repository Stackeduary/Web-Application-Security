<!-- Bill Sendewicz WebAppSec HW 2 -->

<?php
    ini_set('display_errors', 1);

	$cookie_name = "hwCookieName";
	$cookie_value = "hwCookieValue";
	$arr_cookie_options = array ('path' => '/hw2part1.php');
	setcookie($cookie_name, $cookie_value, $arr_cookie_options);

    $message = "";
    if (isset($_GET['csp']) && $_GET['csp'] == 'true') {
        header("Content-Security-Policy: frame-ancestors 'none'");
    } elseif (isset($_GET['csp']) && $_GET['csp'] == 'false') {
        header("Content-Security-Policy: frame-ancestors 'self'");
    } else {
        http_response_code(200);
        $message = "<h1>Your request is not accepted</h1>";
        echo $message;
        exit;
    }
?>

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
    <input type="email" id="etext" name="emailValue" value="bill@billisawesome.net"><br>
    <label for="ptext">Password:</label>
    <input type="password" id="ptext" name="passValue"> <br>
    <input type="submit" value="Register">
</form>
        </p>
    </body>
</html>