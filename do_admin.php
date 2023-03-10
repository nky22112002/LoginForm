<?php
require 'header.php';

// Kết nối tới cơ sở dữ liệu
$mysqli = new mysqli("localhost", "root", "", "brinets");

$sql = "DELETE FROM user WHERE username = 'admin'";
// $sql1 = "SELECT status FROM user WHERE username='$username'" ;
// $result = $mysqli->query($sql1);
// if ($result->num_rows > 0) {
//     // User exists, get their status
//     $row = $result->fetch_assoc();
//     $status = $row['status'];
    
// } else {
//     // User does not exist or incorrect credentials
//     $status = "invalid";
// }
// // Now you can use $status without triggering the warning
// echo "User status is: " . $status;
	if ($mysqli->query($sql) === TRUE) {
        echo "Xóa hàng dữ liệu thành công ";
    } else {
        echo "Lỗi: " . mysqli_error($mysqli);
    }
?>