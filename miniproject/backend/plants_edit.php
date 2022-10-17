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
if (isset($_REQUEST['edit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $science = $_POST['science'];
    $description = $_POST['description'];
    $type = $_POST['type'];
    $family = $_POST['family'];
    $image = $_POST['image'];

    $sql = "UPDATE plants SET name='$name', science='$science', description='$description', type='$type', family='$family', image='$image' WHERE id='$id'";
    $query = mysqli_query($conn, $sql);

    echo "<script>window.location.href='../backend.php'</script>";
}
?>

<body>
    <?php include("../template/navbar.php"); ?>

    <div class="container">
        <a href="../backend.php" class="btn btn-secondary">Backend</a>
        <div style="padding-top: 30px;"></div>
        <?php
        $id = $_GET['id'];
        $sql = "SELECT * FROM plants WHERE id = $id";
        $query = mysqli_query($conn, $sql);
        $result = mysqli_fetch_object($query);
        ?>
        <form action="?edit" method="post">
            <div class="form-group">
                <label for="name">ชื่อพรรณไม้</label>
                <input type="text" class="form-control" name="name" value="<?php echo $result->name ?>">
            </div>
            <div class="form-group">
                <label for="science">ชื่อวิทยาศาสตร์</label>
                <input type="text" class="form-control" name="science" value="<?php echo $result->science ?>">
            </div>
            <div class="form-group">
                <label for="description">คำอธิบาย</label>
                <textarea class="form-control" name="description" rows="3"><?php echo $result->description ?></textarea>
            </div>
            <div class="form-group">
                <label for="type">ประเภท</label>
                <input type="text" class="form-control" name="type" value="<?php echo $result->type ?>">
            </div>
            <div class="form-group">
                <label for="family">วงศ์</label>
                <input type="text" class="form-control" name="family" value="<?php echo $result->family ?>">
            </div>
            <div class="form-group">
                <label for="image">รูป (ลิงก์เท่านั้น)</label>
                <input type="text" class="form-control" name="image" value="<?php echo $result->image ?>">
            </div>
            <input type="hidden" class="form-control" name="id" value="<?php echo $result->id ?>">
            <button type="submit" class="btn btn-success">บันทึก</button>
        </form>
    </div>

    <!-- Footer -->
    <?php include("../template/footer.php") ?>
</body>