<?php

$conn = new mysqli("localhost","root","","gaming_tournament");

if($conn->connect_error){
die("Connection Failed");
}

?>