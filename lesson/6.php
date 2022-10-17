<!-- Header -->
<?php include("../template/header.php") ?>

<body>
    <!-- Navbar -->
    <?php include("../template/navbar.php") ?>

    <!-- Body -->
    <div class="container">
        <div class="row ptop30">
            <div class="col-12">
                <b>Function</b>
            </div>
            <div class="col-12">
                &emsp;Function คือ การนำคำสั่งที่ใช้บ่อย ๆ มารวมกัน ไว้ สามารถ เรียกใช้งานได้ง่าย และนำกลับมาใช้
                ใหม่ โดยไม่ต้องเขียนคำสั่งใหม่ทั้งหมด เรียกแค่ชื่อ function และ อาจมีการส่งค่าไปให้ function ทำงาน
                และ ส่งผลลัพธ์กลับมา ซึ่ง function มีทั้งแบบที่ PHP มีมาให้เราใช้งานได้อยู่และ กับแบบที่เราต้องการ
                function ขึ้นมาเองเพื่อให้ตรงกับความต้องการ
            </div>
            <div class="col-12 ptop10">
                ตัวอย่างการเรียกใช้งาน function ที่มีมาอยู่แล้วใน PHP
            </div>
            <div class="col-12">
                การเรียกใช้งาน function phpinfo() เพื่อแสดงข้อมูลของ รายละเอียดค่าของ php ที่ใช้งานอยู่
            </div>
            <div class="col-12">
                <img src="../image/lesson_6_1.png" class="center">
            </div>
            <div class="col-12">
                ตัวอย่างการทำงาน
            </div>
            <div class="col-12">
                <img src="../image/lesson_6_2.png" class="center">
            </div>
            <div class="col-12">
                การสร้าง function ขึ้นมาเอง แบบไม่มีการส่งค่าระหว่าง function และการเรียกใช้งาน
            </div>
            <div class="col-12">
                <img src="../image/lesson_6_3.png" class="center">
            </div>
            <div class="col-12">
                การตั้งชื่อ function นั้น จะต้องไม่ซ้ากับชื่อ function ที่มีมาอยู่แล้วใน PHP และควรสื่อความหมายการ
                ทำงาน
            </div>
        </div>
        <div class="row ptop30">
            <div class="col-12">
                <b>การสร้าง function ที่มีการส่งค่าระหว่าง function</b>
            </div>
            <div class="col-12">
                &emsp;ตัวอย่างเป็นการสร้าง function ชื่อ name และมีการส่งค่าพารามิเตอร์ 2 ตัว คือ ตัวแปร $name
                และ ตัวแปร $phone
            </div>
            <div class="col-12">
                <img src="../image/lesson_6_4.png" class="center">
            </div>
            <div class="col-12">
                การเรียกใช้งาน เราต้องระบุค่าของ พารามิเตอร์ที่ต้องการนำไปใช้งานใน function
            </div>
            <div class="col-12">
                ตัวอย่างการแสดงผล
            </div>
            <div class="col-12">
                <img src="../image/lesson_6_5.png" class="center">
            </div>
            <div class="col-12">
                ข้อดีของ function คือเราสามารถเรียกใช้งาน function ซ้าหลาย ๆ ครั้งได้โดยไม่ต้องเขียน Code เดิมอีก
                เพียงแค่เปลี่ยนข้อมูลใน พารามิเตอร์ตอนที่เรียกใช้งาน
            </div>
            <div class="col-12">
                ตัวอย่างการเรียกใช้งาน Function ซ้ากันหลาย ๆ ครั้ง
            </div>
            <div class="col-12">
                <img src="../image/lesson_6_6.png" class="center">
            </div>
            <div class="col-12">
                ตัวอย่างการแสดงผล
            </div>
            <div class="col-12">
                <img src="../image/lesson_6_7.png" class="center">
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include("../template/footer.php") ?>
</body>