<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        form {
            width: 300px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #f8f8f8;
        }
    </style>
</head>
<body>

<?php
session_start();
if(isset($_SESSION['username'])){
    ?>

    <h1>Xin chào, <?php echo $_SESSION['username']; ?>!</h1>
    <!-- Đây là nội dung trang web -->

    <p>Đây là trang chủ của bạn. Bạn có thể thêm nội dung trang web ở đây.</p>

    <a href="logout.php">Đăng xuất</a>

    <?php
} else {
    ?>

    <form action="login.php" method="post">
        <h1>Đăng nhập</h1>
        <!-- Đây là form đăng nhập -->
        <label for="username">Tên người dùng:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Mật khẩu:</label>
        <input type="password" id="password" name="password" required><br>

        <input type="submit" value="Đăng nhập">
    </form>

    <?php
}
?>

</body>
</html>
