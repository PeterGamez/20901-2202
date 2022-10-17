<?php
require_once("./ajax/config.php");
include("./template/header.php");

if (isset($_REQUEST['search'])) {
    $data = $_GET['search'];
    $sql = "SELECT * FROM plants WHERE name LIKE '%$data%' OR science LIKE '%$data%' OR dialect LIKE '%$data%' OR description LIKE '%$data%' OR 
            type LIKE '%$data%' OR family LIKE '%$data%'";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_all($query);
} else {
    $sql = "SELECT * FROM plants";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_all($query);
}
?>

<body>
    <?php include("./template/navbar.php"); ?>

    <div class="container">

        <div class="row">
            <div class="col-8"></div>
            <div class="col-4">
                <form class="d-flex" method="GET">
                    <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">&nbsp;
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>

        <?php
        $count = 0;
        for ($x = 0; $x < count($result); $x++) {
            $data = $result[$x];
            $count++;
            if ($count == 1) {
        ?>
                <div class="row" style="padding-top: 30px;">
                <?php
            }
                ?>
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <a href="https://google.com/search?q=<?php echo $data[1] ?>" target="_blank"><img src="<?php echo $data[7] ?>" class="card-img-top"></a>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $data[1] ?></h5>
                            <p class="card-text">
                                ชื่อวิทยาศาสตร์ : <?php echo $data[2] ?><br>
                                ชื่อท้องถิ่น : <?php echo $data[3] ?><br>
                                คำอธิบาย : <?php echo $data[4] ?><br>
                                ประเภท : <?php echo $data[5] ?><br>
                                วงศ์ : <?php echo $data[6] ?>
                            </p>
                            <a href="https://google.com/search?q=<?php echo $data[1] ?>" class="btn btn-light" target="_blank">ค้าหาข้อมูลเพื่มเติม</a>
                        </div>
                    </div>
                </div>
                <?php
                if ($count == 3 or $x == count($result) - 1) {
                ?>
                </div>
        <?php
                    $count = 0;
                }
            }
        ?>
    </div>
    <!-- Footer -->
    <?php include("./template/footer.php") ?>
</body>