<?php 
$servername = "172.29.2.197:3306";
$username = "root";
$password = "123456";
$dbname = "google";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname); 

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối không thành công: " . $conn->connect_error);
}
else
{   
    echo "Kết nối thành công <br/>";
}

mysqli_query($conn, "SET NAMES utf8");