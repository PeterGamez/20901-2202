<?php
require_once("../ajax/config.php");
include("../template/header.php");
?>

<?php
if ($_SESSION['login'] == true and ($_SESSION['user_type'] == "admin" or $_SESSION['user_type'] == "owner")) {
} else {
    echo "<script>window.location.href='../index.php'</script>";
}
?>

<?php
if (isset($_REQUEST['add'])) {
    $name = $_POST['name'];
    $science = $_POST['science'];
    $description = $_POST['description'];
    $type = $_POST['type'];
    $family = $_POST['family'];
    $image = $_POST['image'];

    $sql = "INSERT INTO plants (name, science, description, type, family, image) VALUES ('$name', '$science', '$description', '$type', '$family', '$image')";
    $query = mysqli_query($conn, $sql);

    echo "<script>window.location.href='../backend.php'</script>";
}
?>

<body>
    <?php include("../template/navbar.php"); ?>

    <div class="container">
        <a href="../backend.php" class="btn btn-secondary">Backend</a>
        <div style="padding-top: 30px;"></div>

        <form action="?add" method="post">
            <div class="form-group">
                <label for="name">ชื่อพรรณไม้</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label for="science">ชื่อวิทยาศาสตร์</label>
                <input type="text" class="form-control" name="science">
            </div>
            <div class="form-group">
                <label for="description">คำอธิบาย</label>
                <textarea class="form-control" name="description" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="type">ประเภท</label>
                <input type="text" class="form-control" name="type">
            </div>
            <div class="form-group">
                <label for="family">วงศ์</label>
                <input type="text" class="form-control" name="family">
            </div>
            <div class="form-group">
                <label for="image">รูป (ลิงก์เท่านั้น)</label>
                <input type="text" class="form-control" name="image">
            </div>
            <button type="submit" class="btn btn-success">บันทึก</button>
        </form>
    </div>

    <!-- Footer -->
    <?php include("../template/footer.php") ?>
</body>