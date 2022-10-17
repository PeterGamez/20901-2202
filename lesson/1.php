<!-- Header -->
<?php include("../template/header.php") ?>

<body>
    <div id="lightbox"></div>
    <!-- Navbar -->
    <?php include("../template/navbar.php") ?>

    <!-- Body -->
    <div class="container">
        <div class="row ptop30">
            <div class="col-12">
                <b>PHP</b> คืออะไร
            </div>
            <div class="col-12">
                &emsp;PHP คือ ภาษาโปรแกรม รูปแบบหนึ่ง ที่ทำงาน อยู่บน Server หรือ เรียกว่า Server Side Script
                โดยคำสั่ง ภาษา PHP นั้นจะถูกนำไปประมวลผลในฝั่ง Server ก่อน และส่งผลลัพธ์ กลับมาแสดงผลให้
                ผู้ใช้งานผ่านทางหน้าจอของเครื่อง Client ที่ร้องขอไฟล์
            </div>
            <div class="col-12">
                &emsp;ภาษา PHP นั้นถูกพัฒนาอย่างต่อเนื่อง มี library และ Framwork ต่าง ๆ ให้เลือกใช้มากมาย เป็น
                ภาษาที่ได้รับความนิยม มีผู้ใช้งานเป็นจำนวนมาก เหมาะสำหรับเริ่มต้นเรียนรู้การเขียนโปรแกรม
            </div>
        </div>
        <div class="row ptop30">
            <div class="col-12">
                <b>เครื่องมือสำหรับการพัฒนาโปรแกรม ภาษา PHP</b>
            </div>
            <div class="col-12">
                <ul style="list-style-type:decimal">
                    <li>โปรแกรม Text Editor เช่น notepad++, sublime text 3, netbeans เป็นต้น</li>
                    <li>โปรแกรมจำลอง Web Server เช่น Xampp, Wampp เป็นต้น โดยโปรแกรมจำลอง Web Server นั้น
                        คือโปรแกรมที่ รวมเอาโปรแกรมที่จำเป็นในการพัฒนา เช่น Apache, MySQL, PhpMyAdmin และ อื่น ๆ
                        เพื่อให้สามารถพัฒนาโปรแกรมได้สะดวกยิ่งขึ้น</li>
                    <li>โปรแกรม Web Browser Google Chorme หรือ Mozila Firefox</li>
                </ul>
            </div>
            <div class="col-12">ใน Ebook เล่มนี้จะใช้โปรแกรม Text Editor Sublime Text และ โปรแกรมจำลอง Web Server Xampp
            </div>
            <div class="col-12">ในการเริ่มต้นผู้เขียนแนะนำให้ ผู้อ่านได้ ทดลองพิมพ์คำสั่ง และ Run ตาม
                เพื่อให้เกิดความคุ้นเคยกับตัวภาษาโปรแกรม</div>
        </div>
        <div class="row ptop30">
            <div class="col-12">
                <b>การดาวน์โหลดและติดตั้ง โปรแกรมจำลอง Server Xampp (For Windows)</b>
            </div>
            <div class="col-12">
                <ul style="list-style-type:disc">
                    <li>โปรแกรม Xampp เป็นโปรแกรมสำหรับจำลองเครื่องคอมพิวเตอร์ให้สามารถใช้งาน Web Server
                        ได้สามารถดาวน์โหลด โปรแกรมได้ที่ <a href="https://apachefriends.org/">apachefriends.org</a></li>
                    <li>
                        <div style="color:red">โปรดตรวจสอบว่าในเครื่องของท่านไม่มีโปรแกรม Web Server ตัวอื่นใช้งานอยู่
                        </div>
                    </li>
                    <img src="../image/lesson_1_1.png" class="center">
                    <li>เมื่อดาวน์โหลดเรียบร้อยจะได้ไฟล์ ดับเบิลคลิกเพื่อ ติดตั้ง</li>
                    <img src="../image/lesson_1_2.png" class="center">
                    <li>จะเข้าสู่หน้าจอการติดตั้งโปรแกรม คลิก Next</li>
                    <img src="../image/lesson_1_3.png" class="center">
                    <img src="../image/lesson_1_4.png" class="center">
                    <li>เลือก Folder ที่อยู่ของโปรแกรม</li>
                    <img src="../image/lesson_1_5.png" class="center">
                    <img src="../image/lesson_1_6.png" class="center">
                    <img src="../image/lesson_1_7.png" class="center">
                    <img src="../image/lesson_1_8.png" class="center">
                    <img src="../image/lesson_1_9.png" class="center">
                    <li>คลิก Finish เพื่อเสร็จสิ้นการติดตั้งโปรแกรมจะแสดงหน้าจอ Xampp Control Panel ขึ้นมา</li>
                    <li>คลิกปุ่ม Start Service Apache และ MySQL</li>
                    <img src="../image/lesson_1_10.png" class="center">
                    <li>เมื่อ Start Service เรียบร้อยแล้ว</li>
                    <img src="../image/lesson_1_11.png" class="center">
                    <li>ทดสอบการใช้งาน เปิด Web Browser พิมพ์ localhost หรือ 127.0.0.1</li>
                    <img src="../image/lesson_1_12.png" class="center">
                </ul>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <?php include("../template/footer.php") ?>
</body>