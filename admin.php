<?php
    // Kết nối tới cơ sở dữ liệu
    $mysqli = new mysqli("localhost", "root", "", "brinets");

    // Thực hiện truy vấn để lấy dữ liệu
    $result = $mysqli->query("SELECT * FROM user");
    // Tạo danh sách HTML từ dữ liệu
    echo "<ul>";
    while ($row = $result->fetch_assoc()) {
        echo "<li>" . $row["username"] . "</li>";
        echo "<button>". "<a href='do_admin.php'>Delete</a>" . "</button>"; 
        // echo "<button>" . $sql = "DELETE FROM user WHERE username = 'ky12345'" . $mysqli->query($sql); . "</button>"; 
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