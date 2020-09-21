<?php
$servername = "localhost";
$username = "db";
$password = "123456";
$dbname = "db";
$conn = new mysqli($servername, $username, $password, $dbname);
@mysqli_set_charset($conn,utf8);