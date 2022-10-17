<!-- Header -->
<?php include("../template/header.php") ?>

<body>
    <!-- Navbar -->
    <?php include("../template/navbar.php") ?>

    <!-- Body -->
    <div class="container">
        <div class="row ptop30">
            <div class="col-12">
                <b>การใช้งาน PHP MySQLi ในการจัดการฐานข้อมูล MySQL</b>
            </div>
            <div class="col-12">
                &emsp;ในการเขียนโปรแกรม PHP เพื่อจัดการฐานข้อมูล ใน PHPนั้น สามารถเขียนได้ 2 แบบ คือ แบบ
                mysqli กับ แบบ PHP PDO ซึ่งในการเขียนโปรแกรมเชื่อมต่อกับฐานข้อมูลนั้น ผู้อ่านจำเป็นต้องมีความรู้
                ใน ภาษา SQL (Structured Query Language) ซึ่งเป็นภาษามาตรฐานสำหรับจัดการข้อมูลในฐานข้อมูล
                เช่น การ ค้นหา เพิ่ม แก้ไข และ ลบข้อมูล ในฐานข้อมูล
            </div>
            <div class="col-12 ptop10">
                ความแตกต่างระหว่างการเขียน mysqli กับ PDO คือ
            </div>
            <div class="col-12">
                &emsp;การเขียนแบบ php mysqli จะรองรับเฉพาะฐานข้อมูล MySQL เท่านั้น ส่วนการเขียน PHP แบบ
                PDO จะรองรับการเชื่อมต่อฐานข้อมูลที่หลากหลาย
                ซึ่งใน Ebook เล่มนี้จะแนะนำการใช้งาน PHP แบบ mysqli ในการจัดการฐานข้อมูล โดยใช้ร่วมกับ
                PhpMyAdmin
            </div>
            <div class="col-12 ptop10">
                การสร้างฐานข้อมลู ใน PhpMyAdmin
            </div>
            <div class="col-12">
                &emsp;เมื่อติดตั ้งโปรแกรม XAMPP สำเร็จแล้ว สามารถเข้าสู่ระบบจัดการฐานข้อมูลได้โดย
                พิมพ์ localhost /phpmyadmin เมื่อเข้าสู่หน้าจอ phpmyadminแล้วคลิกที่ เมนู Database
            </div>
            <div class="col-12">
                <img src="../image/lesson_7_1.png" class="center">
            </div>
            <div class="col-12">
                ในช่อง Create database พิมพ์ชื่อฐานข้อมูลที่ต้องการสร้าง และในช่อง Collation เลือกเป็น
                utf8_general_ci เพื่อรองรับกับภาษาไทย
            </div>
            <div class="col-12">
                <img src="../image/lesson_7_2.png" class="center">
            </div>
            <div class="col-12">
                &emsp;เมื่อสร้างฐานข้อมูลเรียบร้อย เราจะได้ฐานข้อมูลชื่อว่า demoซึ่งจะยังไม่มีข้อมูลอะไร เราต้องมา
                ทำการสร้างตารางเพื่อเก็บข้อมูล ต่าง ๆ ที่ต้องใช้ในระบบของเรา ซึ่งในการสร้างตารางนั้นเราจำเป็นต้อง
                ออกแบบโครงสร้างของตารางเสียก่อนที่จะเริ่มลงมือเขียนโปรแกรม แต่ในตัวอย่างนี้จะเป็นการสร้างตาราง
                employees แบบง่าย ๆ เก็บเพียง ชื่อ ที่อยู่ เงินเดือน วันเกิด เพื่อแสดงให้เห็นถึงการเขียนโปรแกรม เพื่อ
                ค้นหา เพิ่ม แก้ไข ลบ ข้อมูล ในฐานข้อมูล
            </div>
        </div>
        <div class="row ptop30">
            <div class="col-12">
                <b>การสร้างตาราง employees ด้วยคำสั่ง CREATE TABLE</b>
            </div>
            <div class="col-12">
                ตัวอย่างคำสั่งสร้าง ตาราง employees
            </div>
            <div class="col-12">
                <img src="../image/lesson_7_3.png" class="center">
            </div>
            <div class="col-12">
                อธิบาย คำสั่ง SQL เพิ่มเติม
            </div>
            <div class="col-12">
                <ul style="list-style-type:none">
                    <li>บรรทัดที่ 2 สร้างตารางชื่อว่า employees</li>
                    <li>บรรทัดที่ 3 สร้าง คอลัมน์ชื่อว่า id เก็บข้อมูลเป็น INT(ตัวแลข) ไม่เป็นค่าว่าง NOT NULL เพิ่มลำดับเลขคอลัมน์อัตโนมัติ AUTO_INCREMENT และ กำหนดให้เป็น PRIMARY KEY คือ เป็น คีย์หลัก สามารถอ้างอิงถึงข้อมูลอื่น ๆ ในตารางได้</li>
                    <li>บรรทัดที่ 4 สร้าง คอลัมน์ชื่อว่า fullname เก็บค่าเป็น VARCHAR (100) คือ ค่าสตริงความยาวไม่เกิน 100 ตัวอักษร</li>
                    <li>บรรทัดที่ 5 สร้าง คอลัมน์ชื่อว่า address เก็บค่าเป็น VARCHAR (250) คือ ค่าสตริงความยาวไม่เกิน 250 ตัวอักษร</li>
                    <li>บรรทัดที่ 6 สร้าง คอลัมน์ชื่อว่า salary เก็บค่าเป็น INT(11) คือ ค่าตัวแลขความยาวไม่เกิน 11 หลัก</li>
                    <li>บรรทัดที่ 7 สร้าง คอลัมน์ชื่อว่า birthday เก็บค่าเป็น DATE คือ เก็บค่าวันที่ในรูปแบบ ปี (ค.ศ.) – เดือน – วัน</li>
                </ul>
            </div>
            <div class="col-12">
                คลิกที่เมนู SQL เพิ่มคำสั่งสำหรับการสร้างตารางดังนี้
            </div>
            <div class="col-12">
                <img src="../image/lesson_7_4.png" class="center">
            </div>
            <div class="col-12">
                เมื่อสร้างตารางเรียบร้อยแล้ว
            </div>
            <div class="col-12">
                <img src="../image/lesson_7_5.png" class="center">
            </div>
        </div>
        <div class="row ptop30">
            <div class="col-12">
                <b>การเพื่มข้อมูลเข้าสู่ตาราง ด้วยคา สั่ง INSERT</b>
            </div>
            <div class="col-12">
                &emsp;ในตัวอย่างเราจะทำการเพิ่มข้อมูลเข้าไปในตาราง employee ก่อน ด้วยคำสั่ง INSERT โดยคำสั่งมีรูปแบบการเขียนดังนี้
            </div>
            <div class="col-12 ptop10">
                รูปแบบการเขียนคำสั่ง INSERT
            </div>
            <div class="col-12">
                INSERT INTO ชื่อตาราง (คอลัมน์1, คอลัมน์2, คอลัมน์3, คอลัมน์4, คอลัมน์5)
                VALUES (ข้อมูล1, ข้อมูล2, ข้อมูล3, ข้อมูล4, ข้อมูล5);
            </div>
            <div class="col-12 ptop10">
                ตัวอย่างคำสั่งที่ใช้เพื่อเพื่มข้อมูลในตาราง employees
            </div>
            <div class="col-12">
                INSERT INTO employees (id, fullname, address, salary, birthday)
                VALUES (NULL, 'สมชาย ใจดี', '105 แขวง บางมด เขต ทุ่งครุ กรุงเทพฯ 10140', '2500', '1987-06-28'),
                (NULL, 'สมหญิง สายเสมอ', '269/10 ซ.ลาดพร้าว ถนน ลาดพร้าว แขวงวังทองหลาง เขต วังทองหลาง กรุงเทพ 10310', '12000', '1980-04-26');
            </div>
            <div class="col-12">
                <img src="../image/lesson_7_6.png" class="center">
            </div>
            <div class="col-12">
                <img src="../image/lesson_7_7.png" class="center">
            </div>
            <div class="col-12">
                <img src="../image/lesson_7_8.png" class="center">
            </div>
            <div class="col-12">
                <img src="../image/lesson_7_9.png" class="center">
            </div>
        </div>
        <div class="row ptop30">
            <div class="col-12">
                <b>การเชื่อมต่อฐานข้อมูล PHP MySQLi</b>
            </div>
            <div class="col-12">
                &emsp;การเชื่อมต่อฐานข้อมูล MySQL เราจะใช้ Function mysqli_connect และ กําหนดค่าการเชื่อมต่อ ฐานข้อมูลเช่น ชื่อ Server Name,
                Username Password และชื่อฐานข้อมูล ลงไปใน Function สร้างไฟล์ connect.php ลงใน Folder Project ของเรา<br>
                1. สร้าง Folder ชื่อ basic เก็บไว้ที่ Drive (ที่ติดตั้งโปรแกรม XAMPP เช่น C://xampp/htdocs/basic)<br>
                2. สร้างไฟล์ connect.php เก็บไว้ที่ C://xampp/htdocs/basic/connect.php<br>
                ตัวอย่าง C://xampp/htdocs/basic/connect.php กําหนดค่าการเชื่อมต่อฐานข้อมูลดังภาพ
            </div>
            <div class="col-12">
                <img src="../image/lesson_7_10.png" class="center">
            </div>
            <div class="col-12">
                ทดสอบการทำงาน เปิด Web Browser
            </div>
            <div class="col-12">
                <img src="../image/lesson_7_11.png" class="center">
            </div>
        </div>
        <div class="row ptop30">
            <div class="col-12">
                <b>การเรียกดูข้อมูล ในฐานข้อมูล</b>
            </div>
            <div class="col-12">
                1. ก่อนอื่นจะต้องสร้างไฟล์ index.php ขึ้นมา และนําเข้าไฟล์ connect.php ด้วยคําสั่ง require()
                เพื่อเชื่อมต่อกับฐานข้อมูล (ในตัวอย่างจะแสดงการเขียน Source Code ในไฟล์ index.php ที่ละ ขั้นตอน)
            </div>
            <div class="col-12">
                <img src="../image/lesson_7_12.png" class="center">
            </div>
            <div class="col-12">
                2. สร้างตารางด้วย แท็ก table สำหรับเตรียมนำข้อมูลมาแสดง
            </div>
            <div class="col-12">
                <img src="../image/lesson_7_13.png" class="center">
            </div>
            <div class="col-12">
                3. สร้างตัวแปร $sql เก็บคำสั่ง SQL เรียกดูข้อมูลจากตาราง employee เรียกใช้ ฟังชั่น
                mysqli_query โดยรับค่าตัวแปร $conn (มาจากไฟล์ connect.php) และ ตัวแปร $sql และ นำ
                ผลที่ได้ มาเก็บไว้ในตัวแปร $result
            </div>
            <div class="col-12">
                <img src="../image/lesson_7_14.png" class="center">
            </div>
            <div class="col-12">
                4. สร้างตัวแปร $i เพื่อใช้แสดงลำดับแสดงข้อมูล และ ใช้คำสั่ง if ตรวจสอบการทำงานของ ฟังชั่น
                mysqli_num_rows ($result) ว่ามีค่ามากกว่า 0 หรือไม่
            </div>
            <div class="col-12">
                <img src="../image/lesson_7_15.png" class="center">
            </div>
            <div class="col-12">
                5. ใช้คำสั่ง while เพื่อนำข้อมูล ที่ได้จากฟังชั่น mysqli_fetch_assoc มาเก็บไว้ที่ตัวแปร $row แสดงผล
                ข้อมูลจากฐานข้อมูลที่อยู่ตัวแปล $row ตามชื่อ คอลัมน์ในตาราง employee และเพิ่มค่า $i ทีละ 1
            </div>
            <div class="col-12">
                <img src="../image/lesson_7_16.png" class="center">
            </div>
            <div class="col-12">
                6.ทดสอบการทำงาน พิมพ์ localhost/basic/index.php ใน Web Browser
            </div>
            <div class="col-12">
                <img src="../image/lesson_7_17.png" class="center">
            </div>
        </div>
        <div class="row ptop30">
            <div class="col-12">
                <b>การสร้างฟอร์มบันทกึข้อมูล</b>
            </div>
            <div class="col-12">
                &emsp;การสร้างฟอร์มบันทึกข้อมูล ในตัวอย่างจะทำการสร้างไฟล์ add_form.php สำหรับ สร้างฟอร์ม
                และ สร้างไฟล์ data.php สำหรับรับข้อมูลจากฟอร์ม บันทึกเข้าสู่ฐานข้อมูล
            </div>
            <div class="col-12">
                ตัวอย่างไฟล์ add_form.php
            </div>
            <div class="col-12">
                <img src="../image/lesson_7_18.png" class="center">
            </div>
            <div class="col-12">
                ตัวอย่างไฟล์ data.php
            </div>
            <div class="col-12">
                <img src="../image/lesson_7_19.png" class="center">
            </div>
            <div class="col-12">
                บรรทัดที่ 2 ใช้คำสั่ง require() นำเข้าไฟล์ connect.php เพื่อเชื่อมต่อฐานข้อมูล<br>
                บรรทัดที่ 4 ใช้คำสั่ง if ตรวจสอบค่าในตัวแปรรูปแบบ POST ว่ามีค่า type เท่ากับ add ส่งมาหรือไม่<br>
                บรรทัดที่ 5 – 8 รับค่าจากตัวแปร POST และเก็บข้อมูลลงในตัวแปรของแต่ละคอลัมน์<br>
                บรรทัดที่ 10 ตัวแปร $sql เก็บค่าคำสั่งสำหรับเพิ่มข้อมูลลงฐานข้อมูล
            </div>
            <div class="col-12">
                ทดสอบการเพิ่มข้อมูล ไปที่ URL: localhost/basic/add_form.php กรอกข้อมูลตัวอย่างเพิ่มทดสอบการส่งข้อมูล
            </div>
            <div class="col-12">
                <img src="../image/lesson_7_20.png" class="center">
            </div>
        </div>
        <div class="row ptop30">
            <div class="col-12">
                <b>การสร้างฟอร์มแก้ไขข้อมูล</b>
            </div>
            <div class="col-12">
                &emsp;สร้างไฟล์ edit_form.php สำหรับแก้ไขข้อมูล โดยจะรับค่า $_GET['id'] เพื่อนำไปค้นหาข้อมูลที่
                อยู่ในฐานข้อมูล และนำมาแสดงในฟอร์มเพื่อทำการแก้ไข
            </div>
            <div class="col-12">
                ตัวอย่างไฟล์ edit_form.php
            </div>
            <div class="col-12">
                <img src="../image/lesson_7_21.png" class="center">
            </div>
            <div class="col-12">
                บรรทัดที่ 2 คําสั่ง require() นําเข้าไฟล์ connect.php สําหรับการเชื่อมต่อฐานข้อมูล<br>
                บรรทัดที่ 4 ในคําสั่ง if ใช้ฟังชั่น isset ตรวจสอบว่ามีการส่งค่า ตัวแปร $_GET['id'] มาหรือไม่<br>
                บรรทัดที่ 5 สร้างตัวแปร $id รับค่ามาจากตัวแปร $_GET['id']<br>
                บรรทัดที่ 7 สร้างตัวแปร $sql เก็บค่าคําสั่ง SQL ค้นหา ข้อมูลที่มีค่า id เท่ากับตัวแปร $id<br>
                บรรทัดที่ 8 สร้าง ตัวแปร $row เก็บค่าที่ได้จากฟังชั่น mysqli_query()<br>
                บรรทัดที่ 9 สร้างตัวแปร $result เก็บค่าที่ได้จากฟังชัน mysqli_fetch_assoc()<br>
                บรรทัดที่ 11 คําสั่ง if ตรวจสอบว่าตัวแปร $result มีไม่ค่าเป็นจริงหรือไม่ หากไม่เป็นจริงให้แสดงผล Error
            </div>
            <div class="col-12 ptop10">
                ตัวอย่างฟอร์มแก้ไขข้อมูล (ต่อ)
            </div>
            <div class="col-12">
                <img src="../image/lesson_7_22.png" class="center">
            </div>
            <div class="col-12">
                เพิ่มเติม SourceCode ในไฟล์ data.php สำหรับ การแก้ไขข้อมูล
            </div>
            <div class="col-12">
                <img src="../image/lesson_7_23.png" class="center">
            </div>
            <div class="col-12">
                บรรทัดที่ 1 ใช้คำสั่ง if ตรวจสอบค่าในตัวแปรรูปแบบ POST ว่ามีค่า type เท่ากับ edit ส่งมาหรือไม่<br>
                บรรทัดที่ 2-6 สร้างตัวแปรเก็บข้อมูลรับค่าจาก $_POST<br>
                บรรทัดที่ 8 สร้างตัวแปร $sql เก็บค่าคำสั่ง SQL สำหรับ UPDATE ข้อมูลที่มี id เท่ากับ ตัวแปร $id<br>
                บรรทัดที่ 11 ใช้คำสั่ง if ตรวจสอบว่า ฟังชั่น mysqli_query() มีการทำงาน และส่งผลกลับมาเป็น จริงหรือไม่<br>
                บรรทัดที่ 12-13 แสดงผลข้อความหากมีการทำงานเป็นจริง
                บรรทัดที่ 15 แสดงผล Error กรณีมีการทำงานเป็นเท็จ หรือมีข้อผิดพลาด
            </div>
        </div>
        <div class="row ptop30">
            <div class="col-12">
                <b>การลบข้อมูล</b>
            </div>
            <div class="col-12">
                เพิ่มเติม SourceCode ในไฟล์ data.php สำหรับ การลบข้อมูล
            </div>
            <div class="col-12">
                <img src="../image/lesson_7_24.png" class="center">
            </div>
            <div class="col-12">
                บรรทัดที่ 1 ใช้คำสั่ง if ตรวจสอบค่าในตัวแปรรูปแบบ POST ว่ามีค่า type เท่ากับ delete ส่งมาหรือไม่<br>
                บรรทัดที่ 2 สร้างตัวแปร $id เก็บข้อมูลจาก $_GET['id']<br>
                บรรทัดที่ 4 สร้างตัวแปร $sql เก็บค่าคำสั่ง SQL สำหรับ DELETE ข้อมูลที่มี id เท่ากับ ตัวแปร $id<br>
                บรรทัดที่ 6 ใช้คำสั่ง if ตรวจสอบว่า ฟังชั่น mysqli_query() มีการทำงาน และส่งผลกลับมาเป็น จริงหรือไม่<br>
                บรรทัดที่ 7-8 แสดงผลข้อความหากมีการทำงานเป็นจริง
                บรรทัดที่ 10 แสดงผล Error กรณีมีการทำงานเป็นเท็จ หรือมีข้อผิดพลาด
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include("../template/footer.php") ?>
</body>