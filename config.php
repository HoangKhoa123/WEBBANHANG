<?php
    $username = "root";
    $password = "";
    $server = "localhost:3306";
    $dbname = "webbanhang";
    
    // Kết nối đến cơ sở dữ liệu
    $conn = new mysqli($server, $username, $password, $dbname);

    // Kiểm tra kết nối
    if ($conn->connect_error) {
        die("Không thể kết nối: " . $conn->connect_error);
    }

    // Thiết lập mã hóa UTF-8
    $conn->set_charset("utf8mb4");
?>