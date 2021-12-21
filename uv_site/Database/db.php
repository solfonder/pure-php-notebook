<?php
$servername = "localhost";
$database = "notebook";
$username = "root";
$password = "root";

$db = new mysqli($servername, $username, $password, $database);

if($db->connect_error)
    die('Connect Error');

