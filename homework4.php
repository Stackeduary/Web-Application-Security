<?php 
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $doubleSubmit = bin2hex(random_bytes(12));
    $doubleSubmitHash = sha1($doubleSubmit);
    setcookie('doubleSubmit', $doubleSubmitHash);
    if(isset($_COOKIE['SESSIONID']) and $_COOKIE['SESSIONID'] == "TestSession") {
        echo "<form action\"\" method=\"post\">";
        echo "<h1>Write a comment</h1> <input type=\"text\" name=\"message\">";
        echo "<input type=\"hidden\" name=\"doubleSubmit\" value=\"".$doubleSubmit."\">";
        echo "<p><input type=\"submit\" value=\"Send\"></p></form></body></html>";
        exit;
    }
    else {
        echo '<script language="javascript">';
        echo 'alert("Please try again")';
        echo '</script>';
        exit;
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_COOKIE['SESSIONID']) and $_COOKIE['SESSIONID'] == "TestSession") {
        if(isset($_COOKIE['doubleSubmit']) and isset($_POST['doubleSubmit'])) {
            if($_COOKIE['doubleSubmit'] == sha1($_POST['doubleSubmit'])) {
                echo "<p>Attacker B98041 Comment</p>";
                http_response_code(200);
                exit;
            }
    }
}    
?>
<!DOCTYPE html>
<html>
    <body>
        
    </body>
</html>