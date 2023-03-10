<!DOCTYPE html>
<html>
  <head>
    <title>Xóa dữ liệu từ Database</title>
  </head>
  <body>
    <h1>Xóa dữ liệu từ Database</h1>

    <form method="post">
      <label for="username">Tên người dùng:</label>
      <input type="text" name="username" id="username">
      <button type="submit" name="delete">Xóa</button>
    </form>

    <?php
        // Xử lý biểu mẫu khi nút Xóa được nhấp
        if(isset($_POST['delete'])) {
        $username = $_POST['username'];

        // Tạo kết nối đến cơ sở dữ liệu
        $conn = new mysqli("localhost", "root", "", "brinets");

        // Xóa dữ liệu từ bảng users dựa trên tên người dùng
        $sql = "DELETE FROM user WHERE username='$username'";
        $result = $conn->query($sql);

        if($result) {
            echo 'Xóa dữ liệu thành công.';
        } else {
            echo 'Lỗi: Không thể xóa dữ liệu.';
        }

        // Đóng kết nối
        $conn->close();
        }   
    ?>
  </body>
</html>
