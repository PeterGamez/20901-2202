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
if (isset($_REQUEST['edit'])) {
    $id = $_POST['id'];
    $username = strtolower($_POST['username']);
    $email = strtolower($_POST['email']);
    $type = $_POST['type'];

    if (isset($_POST['password'])) {
        $password = $_POST['password'];
        $password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "UPDATE user SET username='$username', email='$email', password='$password', type='$type' WHERE id='$id'";
    } else {
        $sql = "UPDATE user SET username='$username', email='$email', type='$type' WHERE id='$id'";
    }

    $query = mysqli_query($conn, $sql);

    echo "<script>window.location.href='../account.php'</script>";
}
?>

<body>
    <?php include("../template/navbar.php"); ?>

    <div class="container">
        <a href="../account.php" class="btn btn-secondary">Account</a>
        <div style="padding-top: 30px;"></div>
        <?php
        $id = $_GET['id'];
        $sql = "SELECT * FROM user WHERE id = $id";
        $query = mysqli_query($conn, $sql);
        $result = mysqli_fetch_object($query);
        ?>
        <form action="?edit" method="post">
            <div class="form-group">
                <label for="username">ชื่อผู้ใช้</label>
                <input type="text" class="form-control" name="username" value="<?php echo $result->username ?>" require>
            </div>
            <div class="form-group">
                <label for="email">อีเมล</label>
                <input type="email" class="form-control" name="email" value="<?php echo $result->email ?>" require>
            </div>
            <div class="form-group">
                <label for="password">รหัสผ่าน</label>
                <input type="password" class="form-control" name="password" require>
            </div>
            <div class="form-group">
                <label for="type">สิทธิการใช้งาน</label>
                <input type="radio" name="type" value="user" <?php if ($result->type == "user") echo 'checked' ?>>
                <label for="type">สมาชิก</label>
                <input type="radio" name="type" value="admin" <?php if ($result->type == "admin") echo 'checked' ?>>
                <label for="type">ผู้ดูแล</label>
                <input type="radio" name="type" value="owner" <?php if ($result->type == "owner") echo 'checked' ?>>
                <label for="javascript">เจ้าของ</label>
            </div>
            <input type="hidden" class="form-control" name="id" value="<?php echo $result->id ?>">
            <button type="submit" class="btn btn-success">บันทึก</button>
        </form>
    </div>

    <!-- Footer -->
    <?php include("../template/footer.php") ?>
</body>