<!-- Bill Sendewicz WebAppSec HW 1 -->

<?php
ini_set('display_errors', 1);

$body = "";

if ($_SERVER['REQUEST_METHOD'] == "GET" || $_SERVER['REQUEST_METHOD'] == "POST") {
    $body = $_SERVER['REQUEST_METHOD'] . ' Request Received!';
}
else {
    http_response_code(405);
    exit;
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Homework 1</title>
    <script>
        const encodeBase64 = () => {
            let enc = document.getElementById("textLabel")
            enc.innerHTML = btoa(enc.innerText)
            enc = btoa(enc)
        }
        const decodeBase64 = () => {
            let dec = document.getElementById("textLabel")
            dec.innerHTML = atob(dec.innerText)
        }
        function imageLoaded() {
            let message = document.getElementById("imageInfo")
            message.innerText = "The image is successfully loaded"
        }
        function imageFailed() {
            let message = document.getElementById("imageInfo")
            message.innerText = "The image is not loaded due to an error"
        }
    </script>
</head>
<body>
    <?php echo $body; ?> <br>
    <p> 
    <form method="POST" action './homework1.php'>
        <label for="">Text: </label>
        <input type="text" name='input_text' id='input_text'>
        <input type="submit">
    </form> 
    <?php 
    $text = "";
    if (isset($_REQUEST['input_text'])) {
        $text = htmlspecialchars($_REQUEST['input_text']); 
    }    
    ?>
    </p>
    <p>
    <label>Text:</label> <label id="textLabel"><?php echo $text; ?></label>
    <?php 
    if ($text != "") { ?>
        <button onclick='encodeBase64()'>Encode Base64</button>
        <button onclick='decodeBase64()'>Decode Base64</button>
        <?php } ?>
    </p>
    <?php 
    if (isset($_REQUEST['imageUrl'])) { 
        $name = "<img src={$_REQUEST['imageUrl']} height=400 width=400 onload='imageLoaded()' onerror='imageFailed()'>";
        echo $name; 
    } ?>
    <p id="imageInfo"></p>
</body>
</html>