<?php
require_once("./ajax/config.php");
include("./template/header.php");
?>

<?php
if ($_SESSION['login'] == false) {
    echo "<script>window.location.href='./index.php'</script>";
}
?>

<?php
if (isset($_REQUEST['edit'])) {
    $id = $_SESSION['user_id'];
    $passold = $_POST['passold'];
    $passnew = $_POST['passnew'];
    $passverify = $_POST['passverify'];

    $sql = "SELECT * FROM users WHERE id = '$id'";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_object($query);

    if ($result) {
        if (password_verify($passold, $data->password) == false) {
            echo "<script>alert('รหัสผ่านเดิมไม่ถูกต้อง')</script>";
            echo "<script>history.go(-1)</script>";
            exit();
        }

        if ($passnew <> $passverify) {
            echo "<script>alert('รหัสผ่านยืนยันไม่ตรงกัน')</script>";
            echo "<script>window.location.href='./changepw.php'</script>";
        }

        $password = password_hash($passnew, PASSWORD_DEFAULT);

        $sql = "UPDATE user SET password = '$password' WHERE id = '$id'";
        $query = mysqli_query($conn, $sql);

        echo "<script>alert('เปลี่ยนรหัสเสร็จสิ้น')</script>";
        echo "<script>window.location.href='./index.php'</script>";
    } else {
        echo "<script>alert('เกิดข้อผิดพลาด')</script>";
        echo "<script>window.location.href='./logout.php'</script>";
    }
}
?>

<body>
    <?php include("./template/navbar.php"); ?>

    <div class="container">
        <?php
        $sql = "SELECT * FROM user WHERE id = $_SESSION[user_id]";
        $query = mysqli_query($conn, $sql);
        $result = mysqli_fetch_object($query);

        ?>
        <form action="?edit" method="post">
            <div class="form-group">
                <label for="passold">รหัสผ่านเดิม</label>
                <input type="password" class="form-control" name="passold">
            </div>
            <div class="form-group">
                <label for="passnew">รหัสผ่านใหม่</label>
                <input type="password" class="form-control" name="passnew">
            </div>
            <div class="form-group">
                <label for="passverify">ยืนยันรหัสผ่าน</label>
                <input type="password" class="form-control" name="passverify">
            </div>
            <button type="submit" class="btn btn-success">บันทึก</button>
        </form>
    </div>

    <!-- Footer -->
    <?php include("./template/footer.php") ?>
</body>