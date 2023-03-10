<?php
require 'header.php';
    // Kết nối tới cơ sở dữ liệu
    $mysqli = new mysqli("localhost", "root", "", "brinets");

    // Thực hiện truy vấn để lấy dữ liệu
    $result = $mysqli->query("SELECT * FROM user");
    // Tạo danh sách HTML từ dữ liệu
    $sql1 = "SELECT status FROM user WHERE username='$username'" ;
    $result1 = $mysqli->query($sql1);

    $row1 = $result1->fetch_assoc();
    $status = $row1['status'];
    echo "<ul>";
    if($status == 1){
    while ($row = $result->fetch_assoc()) {
            echo "<li>" . $row["username"] . "</li>";
            // echo "<button>". "<a href='do_admin.php'>Delete</a>" . "</button>"; 
            // echo "<button>" . $sql = "DELETE FROM user WHERE username = 'ky12345'" . $mysqli->query($sql); . "</button>"; 
        }
    }
    if($status == 2){
        while ($row = $result->fetch_assoc()) {
            echo "<li>" . $row["username"] . "</li>";
            if($row["status"] == 1){
                echo "<button>". "<a href='do_admin.php'>Delete</a>" . "</button>"; 
            }
            // echo "<button>" . $sql = "DELETE FROM user WHERE username = 'ky12345'" . $mysqli->query($sql); . "</button>"; 
        }
    }
    if($status == 3){
        while ($row = $result->fetch_assoc()) {
            echo "<li>" . $row["username"] . "</li>";
            echo "<button>". "<a href='do_admin.php'>Delete</a>" . "</button>"; 
            // echo "<button>" . $sql = "DELETE FROM user WHERE username = 'ky12345'" . $mysqli->query($sql); . "</button>"; 
        }
    }


    
    echo "</ul>";
    // Xóa
    // $sql = "DELETE FROM user WHERE username = 'ky12345'";
	// if ($mysqli->query($sql) === TRUE) {
    //     echo "Xóa hàng dữ liệu thành công";
    // } else {
    //     echo "Lỗi: " . mysqli_error($mysqli);
    // }
?>
