<?php
// Kết nối tới cơ sở dữ liệu
$mysqli = new mysqli("localhost", "root", "", "brinets");

$sql = "DELETE FROM user WHERE username = 'admin'";
	if ($mysqli->query($sql) === TRUE) {
        echo "Xóa hàng dữ liệu thành công";
    } else {
        echo "Lỗi: " . mysqli_error($mysqli);
    }
?>