<?php
$servername = "localhost"; // Replace with your server name
$username = "root"; // Replace with your MySQL username
$password = "Abc@1234"; // Replace with your MySQL password
$database = "apexdb"; // Replace with your database name



$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    throw new Exception("Connection failed: " . $conn->connect_error);
    echo '<script>';
    echo 'alert("Error connecting to the database: ' . $e->getMessage() . '");';
    echo '</script>';
}


