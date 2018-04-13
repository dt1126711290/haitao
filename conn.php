<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "haitao";

$conn = new mysqli($servername, $username, $password, $dbname);
@mysqli_set_charset($conn,utf8);