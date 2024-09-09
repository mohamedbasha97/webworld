<?php
$name = $_POST{"name"};
$phone = $_POST{"phone"};
$email = $_POST{"email"};
$product = $_POST{"product"};
$messaege = $_POST{"message"};

include "coon.php";

$insertus = "INSERT INTO contactus(name,phone,email,product,message) 
value('$name','$phone','$email','$product','$messaege')";
$result = mysql_query($con,$insertus);
if($result){
    echo "<h1> done </h1>";
} 
else{
die("Erorr:".mysqli_errno($con));
}

?>