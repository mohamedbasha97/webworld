<?php
$con = mysqli_connect("localhost", "root", "") or die ("Error: Can't Connect to Server");
$db = myaqli_select_db($con, "loreal" )  or die ("Error: Can't Connect to Database");
?>