<?php
    $servername = "localhost";
    $username = "root";
    $password = "matkhau_moi";
    $dbname = "thuhuongfpt";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Lỗi kết nối MySQL: " . $conn->connect_error);
    }
    echo "✅ Kết nối MySQL thành công!";
?>


