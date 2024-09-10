<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $username= htmlspecialchars($_POST["username"]);
  $password= htmlspecialchars($_POST["password"]);
$sql="INSERT INTO users (user,password)
VALUES ('$username','$password')";

}

mysqli_query($conn, $sql);
mysqli_close($conn);
?>