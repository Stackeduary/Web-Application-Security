# Homework 1: Simple Web Application
- Submit a web application in a PHP file called homework1.php
- Prepare an environment to execute PHP code yourself
- Process only GET and POST HTTP requests. Other requests must be responded with 405 (Not Allowed) [1p]
- When an HTTP request is received, print its request method at the top (GET Request Received or POST Request Received) [0.5p]
- Insert an HTML form such that it accepts a text input, and when the form is submitted, an HTTP POST request is performed to the same URL. After that, the text input value is inserted below the HTML form [1p]
- When there is a text value, two buttons must appear near to it: Encode Base64 and Decode Base64 [0.5p]
- Clicking Encode Base64 encodes text value in Base64 and Decode Base64 decodes text value in Base64 [0.5p]
- HTTP GET request accepts a query parameter called imageUrl. If it is set then the image must be loaded below the text field using an HTML element. The image size must be 400x400 (width=400, height=400) [0.5p]
- If the image loaded successfully, then the text "The image is successfully loaded" must be written below to the image; and if not loaded, then the text "The image is not loaded due to an error" must be written below the image. [1p]