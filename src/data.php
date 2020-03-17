<?php 
$servername = "mysql";
$username = "root";
$password = "123456";
$database = "google";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $database); 

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối không thành công: " . $conn->connect_error);
}
else
{   
    echo "Kết nối thành công! <br/>";
}

mysqli_query($conn, "SET NAMES utf8");

$sql = "SELECT * FROM article WHERE article.title LIKE '%kyrie irving%' OR article.desc LIKE '%kyrie irving%'";
$result = $conn->query($sql);

if( $result->num_rows > 0 ){
    while( $row = $result->fetch_assoc()){
       echo $row['id'].' '.$row['link'].' '.$row['title'].' '.$row['desc'].'<br>' ;
    }
}