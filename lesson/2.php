<!-- Header -->
<?php include("../template/header.php") ?>

<body>
    <!-- Navbar -->
    <?php include("../template/navbar.php") ?>

    <!-- Body -->
    <div class="container">
        <div class="row ptop30">
            <div class="col-12">
                <b>เริ่มต้นการเขียนโปรแกรม</b>
            </div>
            <div class="col-12">
                &emsp;เมื่อติดตั้ง โปรแกรม Xampp และ โปรแกรม Sublime Text เรียบร้อยแล้ว
                สร้าง Folder Project ของเราไว้ที่ C:xampp/htdocs/ชื่อ Folder Project ของเรา และสร้างไฟล์
                index.php สำหรับทดสอบการทำงานของคำสั่งต่าง ๆ
            </div>
            <div class="col-12">
                ตัวอย่าง จะใช้ชื่อ Folder Project ว่า basic (C:xampp/htdocs/basic/index.php)
            </div>
        </div>
        <div class="row ptop30">
            <div class="col-12">
                <b>การเขียน Tag เปิด และ ปิดคำสั่ง PHP</b>
            </div>
            <div class="col-12">
                &emsp;ในการเขียนโปรแกรมภาษา PHP ก่อนเริ่มทำการเขียนต้องมีการเปิด Tag PHP กันก่อน
                การเขียน Tag มี 2 รูปแบบด้วยกัน คือ <?php echo htmlspecialchars("<?php หรือ <? สำหรับการเปิด และ ?>") ?> สำหรับการปิด
            </div>
        </div>
        <div class="row ptop30">
            <div class="col-12">
                <b>ตัวอย่าง การเขียน Tag PHP</b>
            </div>
            <div class="col-12">
                &emsp;เราจะเขียนคำสั่ง PHP ภายในขอบเขตของ Tag <?php echo htmlspecialchars("<?php และเมื่อสิ้นสุดคำสั่งจะจบด้วย ?>") ?> ทุกครั้ง
                เพื่อให้ตัวแปรภาษารู้ว่าส่วนใดเป็นคำสั่ง PHP นั่นเอง
            </div>
            <div class="col-12">
                    <img src="../image/lesson_2_1.png" class="center">
            </div>
            <div class="col-12">
                ผู้เขียน แนะนำว่าให้เขียนแบบ <?php echo htmlspecialchars("<?php คำสั่ง ?>") ?> เนื่องจากการนำโปรแกรมไปใช้งานจริง บางครั้ง
                เครื่อง Server ได้ทำการปิด Shrot Tag ( <?php echo htmlspecialchars("<? ?>") ?> ) ไว้ อาจทำให้โปรแกรมไม่สามารถใช้งานได้
            </div>
        </div>
        <div class="row ptop30">
            <div class="col-12">
                <b>คำสั่ง echo คือคำสั่งสำหรับ การแสดงผลออกจากหน้าจอ</b>
            </div>
            <div class="col-12">
                ตัวอย่าง 1.1 การแสดงผลข้อความด้วยคำสั่ง echo
            </div>
            <div class="col-12">
                <img src="../image/lesson_2_2.png" class="center">
            </div>
            <div class="col-12">
                ตัวอย่างการแสดงผลออกทางหน้าจอ
            </div>
            <div class="col-12">
                <img src="../image/lesson_2_3.png" class="center">
            </div>
            <div class="col-12">
                ในการจบประโยคคำสั่งโปรแกรมทุกครั้ง ต้องใส่เครื่องหมาย ; เซมิโคล่อน ทุกครั้ง เพื่อเป็นการสิ้นสุดคำสั่ง
            </div>
            <div class="col-12">
                <img src="../image/lesson_2_4.png" class="center">
            </div>
            <div class="col-12">
                ตัวอย่าง Error กรณีลืมใส่ เซมิโคล่อน ;
            </div>
            <div class="col-12">
                <img src="../image/lesson_2_5.png" class="center">
            </div>
        </div>
        <div class="row ptop30">
            <div class="col-12">
                <b>การเขียน Comment</b>
            </div>
            <div class="col-12">
                &emsp;การเขียน Comment คือการปิดการทางานของคำสั่งบางอย่างที่เราไม่ต้องการให้ทำงาน หรือ เป็น
                การอธิบายการทำงานของคำสั่งโดยย่อ เพื่อความสะดวกในการกลับมาแก้ไขในภายหลัง
            </div>
            <div class="col-12 ptop10">
                การเขียน Comment ใน PHP มีรูปแบบดังนี้
            </div>
            <div class="col-12">
                <ul style="list-style-type:decimal">
                    <li>การ Comment แบบ บรรทัดเดียว ใช้เครื่องหมาย // หรือ # คำสั่งที่อยู่ข้างหลังเครื่องจะถูกปิดการ
                        ทำงานทั้งบรรทัด</li>
                    <li>การ comment แบบ หลายบรรทัด ใช้เครื่องหมาย /* ตามด้วยคำสั่งที่ต้องการ ปิดการทำงาน และ
                        ใช้เครื่องหมาย */ เพื่อจบการ Comment</li>
                </ul>
            </div>
            <div class="col-12">
                ตัวอย่างการ Comment
            </div>
            <div class="col-12">
                <img src="../image/lesson_2_6.png" class="center">
            </div>
        </div>
        <div class="row ptop30">
            <div class="col-12">
                <b>การเขียน PHP ร่วมกับ ภาษา HTML</b>
            </div>
            <div class="col-12">
                &emsp;คำสั่งของภาษา PHP นั้นสามารถ แทรกลงในคำสั่งที่เป็น Html ได้ หรือ สั่งให้แสดงผลเป็น Html ได้
            </div>
            <div class="col-12 ptop10">
                ตัวอย่างการเขียน PHP ร่วมกับ HTML
            </div>
            <div class="col-12">
                <img src="../image/lesson_2_7.png" class="center">
            </div>
            <div class="col-12">
                จะเห็นว่า Tag php <?php echo htmlspecialchars("<?php ?>") ?> เป็นตัวกำหนดขอบเขตของคำสั่งเพื่อให้ตัวแปลภาษา รู้ว่าคำสั่งไหนคือคำสั่ง PHP
            </div>
            <div class="col-12">
                <img src="../image/lesson_2_8.png" class="center">
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include("../template/footer.php") ?>
</body>