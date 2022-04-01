<!-- Bill Sendewicz WebAppSec HW 2 -->

<?php
    ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>
    <head>
    <title>Homework 2 Part 2</title>
    <style>
        #div1 {
            width: 1px; 
            height: 1px;
            border: 0; 
            position: absolute; 
            overflow: hidden;
        }
        #div1 iframe {
            top: -24px; 
            left: -25px;
            position: absolute; 
            border: 0; 
            margin: 0; 
            padding: 0;
        }
    </style>
    <script>
        const setIframePosition = (e) => {
            const iframe = document.getElementById('div1')
            iframe.style.left = parseInt(e.pageX) + 'px'
            iframe.style.top = parseInt(e.pageY) + 'px'
        }
        document.onmousemove = setIframePosition
    </script>
    </head>
    <body>
    <?php
        $message = "";
        if (isset($_GET['part']) == '1') {
            echo "<div id='div1' class='frame'><iframe src='/hw2part1.php?csp=false'></iframe></div>";
        } elseif (isset($_GET['part']) == '2') {
            echo 
            '<p>
                <form action="" method="post">
                    <label for="etext">E-Mail:</label>
                    <input type="email" id="etext" name="emailValue" value=""bill@billisawesome.net"><br>
                    <label for="ptext">Password:</label>
                    <input type="password" id="ptext" name="passValue"> <br>
                    <input type="submit" value="Register">
                </form>
            </p>';
        } else {
            http_response_code(200);
            $message = "Your request is not accepted";
            echo $message;
            exit;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['emailValue']) && isset($_POST['passValue'])) {
            http_response_code(200);
            $message = "Welcome ".$_POST['emailValue']."!";
            $message .= "<br>Your password is:  ".$_POST['passValue'];
            echo $message;
            exit;
        }
    ?>