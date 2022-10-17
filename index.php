<!-- Header -->
<?php include("./template/header.php") ?>

<body>
	<!-- Navbar -->
	<?php include("./template/navbar.php") ?>
    <!-- Body -->
    <div class="container">
        <center>
            <!-- <div style="padding-left:20%; padding-right:20%;"> -->
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./image/header1.png" class="d-block w-50">
                            <!-- <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div> -->
                        </div>
                        <div class="carousel-item">
                            <img src="./image/header2.png" class="d-block w-50">
                        </div>
                        <div class="carousel-item">
                            <img src="./image/header3.png" class="d-block w-50">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </button>
                </div>
            <!-- </div> -->
        </center>
        <hr>
        <div class="card">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>รหัสวิชา</b> : 20901-2202<br>
                    <b>กลุ่มสาระการเรียนรู้</b> : กลุ่มสาระการเรียนรู้การงานอาชีพ<br>
                    <b>ชื่อวิชา (ไทย)</b> : การโปรแกรมเว็บเบื้องต้น<br>
                    <b>ชื่อวิชา (อังกฤษ)</b> : Basic Web Programming<br>
                    <b>หน่วยกิต (ท-ป-น)</b> : 1-2-2
                </li>
            </ul>
        </div>

        <h1>การโปรแกรมเว็บเบื้องต้น</h1>
        &nbsp;จุดประสงค์รายวิชา เพื่อให้
        <ul style="list-style-type:decimal">
            <li>เข้าใจเกี่ยวกับการเขียนโปรแกรมเว็บด้วยภาษาโปรแกรมคอมพิวเตอร์</li>
            <li>สามารถเขียนโปรแกรมเว็บเพื่อประยุกต์ใช้งาน</li>
            <li>มีคุณธรรม จริยธรรม และค้านิยมที่ดีในการเขียนโปรแกรมเว็บด้วยภาษาโปรแกรมคอมพิวเตอร์</li>
        </ul>
        &nbsp;สมรรถนะรายวิชา
        <ul style="list-style-type:decimal">
            <li>แสดงความรู้และหลักการการเขียนโปรแกรมเว็บเบื้องต้น</li>
            <li>เขียนโปรแกรมเว็บด้วยภาษาโปรแกรมคอมพิวเตอร์</li>
        </ul>
        &nbsp;คําอธิบายรายวิชา
        <ul style="list-style-type:decimal">
            <li>ศึกษาและปฏิบัติเกี่ยวกับ โครงสร้างภาษาโปรแกรมคอมพิวเตอร์ รูปแบบการใช้คําสั่งต่าง ๆ การใช้และสร้างฟังก์ชัน</li>
            <li>การสร้างฟอร์มติดต่อกับผู้ใช้การเขียนคําสั่งติดต่อกับฐานข้อมูลและจัดการกับฐานข้อมูลเบื้องต้น</li>
        </ul>
    </div>
    </div>

    <!-- Footer -->
    <?php include("./template/footer.php") ?>
</body>

