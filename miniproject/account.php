<?php
require_once("./ajax/config.php");
include("./template/header.php");
?>

<?php
if ($_SESSION['login'] == true and $_SESSION['user_type'] == "owner") {
} else {
    echo "<script>window.location.href='./index.php'</script>";
}
?>

<body>
    <?php include("./template/navbar.php"); ?>

    <div class="container">
        <a href="./backend/account_insert.php" class="btn btn-secondary">เพื่มสมาชิก</a>
        <div style="padding-top: 30px;"></div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">ชื่อผู้ใช้</th>
                    <th scope="col">อีเมล</th>
                    <th scope="col">สิทธิการใช้งาน</th>
                    <th scope="col">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM user";
                $query = mysqli_query($conn, $sql);
                $result = mysqli_fetch_all($query);

                for ($x = 0; $x < count($result); $x++) {
                    $data = $result[$x];
                ?>
                    <tr>
                        <th scope="row"><?php echo $x + 1 ?></th>
                        <td><?php echo $data[1] ?></td>
                        <td><?php echo $data[2] ?></td>
                        <td><?php echo $data[4] ?></td>
                        <td>
                            <a href="./backend/account_edit.php?id=<?php echo $data[0] ?>">📝</a>&nbsp;&nbsp;
                            <a href="./backend/account_delete.php?id=<?php echo $data[0] ?>" onClick="return confirm('คุณต้องการลบหรือไม่')">⛔️</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>


    <!-- Footer -->
    <?php include("./template/footer.php") ?>
</body>