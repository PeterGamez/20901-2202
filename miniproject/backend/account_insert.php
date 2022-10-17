<?php
require_once("../ajax/config.php");
include("../template/header.php");
?>

<?php
if ($_SESSION['login'] == true and $_SESSION['user_type'] == "owner") {
} else {
    echo "<script>window.location.href='../index.php'</script>";
}
?>

<?php
if (isset($_REQUEST['add'])) {
    $username = ($_POST['username']);
    $email = strtolower($_POST['email']);
    $password = $_POST['password'];
    $type = $_POST['type'];

    $password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO user (username, email, password, type) VALUES ('$username', '$email', '$password', '$type')";
    $query = mysqli_query($conn, $sql);

    echo "<script>window.location.href='../account.php'</script>";
}
?>

<body>
    <?php include("../template/navbar.php"); ?>

    <div class="container">
        <a href="../account.php" class="btn btn-secondary">Account</a>
        <div style="padding-top: 30px;"></div>

        <form action="?add" method="post">
            <div class="form-group">
                <label for="username">ชื่อผู้ใช้</label>
                <input type="text" class="form-control" name="username" require>
            </div>
            <div class="form-group">
                <label for="email">อีเมล</label>
                <input type="email" class="form-control" name="email" require>
            </div>
            <div class="form-group">
                <label for="password">รหัสผ่าน</label>
                <input type="password" class="form-control" name="password" require>
            </div>
            <div class="form-group">
                <label for="type">สิทธิการใช้งาน</label>
                <input type="radio" name="type" value="user" checked>
                <label for="type">สมาชิก</label>
                <input type="radio" name="type" value="admin">
                <label for="type">ผู้ดูแล</label>
                <input type="radio" name="type" value="owner">
                <label for="javascript">เจ้าของ</label>
            </div>
            <button type="submit" class="btn btn-success">บันทึก</button>
        </form>
    </div>

    <!-- Footer -->
    <?php include("../template/footer.php") ?>
</body>