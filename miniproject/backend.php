<?php
    require_once("./ajax/config.php");
    include("./template/header.php");
    ?>

    <?php
    if ($_SESSION['login'] == true and ($_SESSION['user_type'] == "admin" or $_SESSION['user_type'] == "owner")) {
    } else {
        echo "<script>window.location.href='./index.php'</script>";
    }
    ?>

    <?php
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
                <div class="col-8">
                    <a href="./backend/plants_insert.php" class="btn btn-secondary">เพื่มพรรณไม้</a>
                </div>
                <div class="col-4">
                    <form class="d-flex" method="GET">
                        <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">&nbsp;
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>

            <div style="padding-top: 30px;"></div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ชื่อพรรณไม้</th>
                        <th scope="col">ชื่อวิทยาศาสตร์</th>
                        <th scope="col">ชื่อท้องถิ่น</th>
                        <th scope="col">ประเภท</th>
                        <th scope="col">วงศ์</th>
                        <th scope="col">&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for ($x = 0; $x < count($result); $x++) {
                        $data = $result[$x];
                    ?>
                        <tr>
                            <th scope="row"><?php echo $x + 1 ?></th>
                            <td><?php echo $data[1] ?></td>
                            <td><?php echo $data[2] ?></td>
                            <td><?php echo $data[3] ?></td>
                            <td><?php echo $data[5] ?></td>
                            <td><?php echo $data[6] ?></td>
                            <td>
                                <a href="./backend/plants_edit.php?id=<?php echo $data[0] ?>">📝</a>&nbsp;&nbsp;
                                <a href="./backend/plants_delete.php?id=<?php echo $data[0] ?>" onClick="return confirm('คุณต้องการลบหรือไม่')">⛔️</a>
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