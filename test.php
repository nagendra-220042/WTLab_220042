<?php
 $conn = mysqli_connect("localhost", "root", "1234","hospital_db");
 if (!$conn) { 
die("Database connection failed"); 
} 
echo "Database connected successfully"; 
?>
