<?php
include("database.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
<from method="post" action="dasd.php">
        
        <label for="username">Name</label>
        <input type="" name="username"placeholder="Admin">
    
    
        <label for="password">Phone="phone"</label>
        <input type="" name="password" placeholder="01">
    
    
        <label for="Email">Email</label>
        <input type="email" name="email" placeholder="Admin@Gmail.com">
    
    
        <label for="Product">Product</label>
        <input type="text" name="product" placeholder="Product">
    
        <label for="Message">Message</label> 
        <textarea rows="2" placeholder="Your Message" name="message"></textarea>
        <button type="submit">Send</button>


</body>
</html>

