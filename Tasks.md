# Homework 4: Cross-Site Request Forgery
- Given https://webappsec.cs.ut.ee/csrf/, implement a CSRF attack using an XSS attack
- The XSS attack should: [3p]
  - Obtain a CSRF token from the web page and construct the URL http://localhost/csrf/homework.php?token=... [1p]
  - Use an existing `<iframe>` in the page with the constructed URL [1p]
  - The first attempt to post a comment opens an alert window with message "Please try again" [0.6p]
  - The second attempt to post the comment "Victim Comment" should be successful [0.4p]
- Implement `homework.php` to perform a cross-site request to post the comment "Attacker ID Comment", where ID is your student ID [2p]
- Include the XSS attack link in `homework.html` using `<a href=…>`


# Homework 3: Cross-Site Scripting
- Given https://webappsec.cs.ut.ee/xss/, implement a DOM XSS attack such that it will insert the cookie `SESSIONID=CompetitiveDomainCookie` with a different domain and an expiry time [2p]
- Prepare an HTML file `autosubmit.html` that sends a payload to https://webappsec.cs.ut.ee/xss/homework.php when it is loaded in the browser [1p]
- Implement a POST-based Reflected XSS attack such that when a user mouses over the search result, it will insert the cookie `searchTerm=CompetitivePathCookie` with a longer path [2p]
- Create an HTML file `homework.html` that links to the first DOM XSS attack and `autosubmit.html`
- Submit `homework.html` and `autosubmit.html` only



# Homework 2: Cookies and Clickjacking
- `hw2part1.php?csp=[true, false]`
  - Set a session cookie `hwCookieName=hwCookieValue` that is only available to `/hw2part1.php` [1p]
  - Define a query parameter `csp` so that `false` would allow only same origin to embed the page and `true` would not allow any pages [1p]
  - The query parameter `csp` must be set to either `true` or `false`. Reject the other cases with HTTP 200 and a message such as 'Your request is not accepted'. [0.5p]
- `hw2part2.php?part=[1, 2]`
  - `part=1` clickjack so that a click would click `Magic Button` in `hw2part1.php` [1p]
  - `part=2` take `Password` and `Register` from `hw2part1.php` to perform registration using `Password` [1p]
  - Query parameter `part` must be set to either `1` or `2`. Reject the other cases with HTTP 200 and a message such as 'Your request is not accepted'. [0.5p]



# Homework 1: Simple Web Application
- Submit a web application in a PHP file called `homework1.php`
- Prepare an environment to execute PHP code yourself
- Process only `GET` and `POST` HTTP requests. Other requests must be responded with 405 (Not Allowed) [1p]
- When an HTTP request is received, print its request method at the top (`GET` Request Received or `POST` Request Received) [0.5p]
- Insert an HTML form such that it accepts a text input, and when the form is submitted, an HTTP `POST` request is performed to the same URL. After that, the text input value is inserted below the HTML form [1p]
- When there is a text value, two buttons must appear near to it: `Encode Base64` and `Decode Base64` [0.5p]
- Clicking `Encode Base64` encodes text value in Base64 and `Decode Base64` decodes text value in Base64 [0.5p]
- HTTP `GET` request accepts a query parameter called `imageUrl`. If it is set then the image must be loaded below the text field using an HTML element. The image size must be 400x400 (width=400, height=400) [0.5p]
- If the image loaded successfully, then the text "The image is successfully loaded" must be written below to the image; and if not loaded, then the text "The image is not loaded due to an error" must be written below the image. [1p]