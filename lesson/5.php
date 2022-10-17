<!-- Header -->
<?php include("../template/header.php") ?>

<body>
    <!-- Navbar -->
    <?php include("../template/navbar.php") ?>

    <!-- Body -->
    <div class="container">
        <div class="row ptop30">
            <div class="col-12">
                <b>ตัวแปรชนิด Array</b>
            </div>
            <div class="col-12">
                &emsp;เป็นตัวแปรที่สามารถเก็บข้อมูล หลาย ๆ ตัวไว้ในตัวแปรเดียว เปรียบเทียบได้กับลิ้นชัก มีช่องอยู่หลายช่อง ในลิ้นชัก สามารถ
                เก็บของได้หลายช่อง แต่กับตัวแปร Array สามารถ เก็บกี่ช่องก็ได้ และ จะต้องมีชื่อของแต่ละช่องเพื่อให้สามารถค้นหาสิ่งของที่อยู่ภายในได้ถูกต้อง
            </div>
        </div>
        <div class="row ptop20">
            <div class="col-12">
                <b>การใช้งานตัวแปร Array</b>
            </div>
            <div class="col-12">
                &emsp;ตัวแปร Array จะประกอบด้วย Key และ Value<br>
                Key คือตำแหน่งของข้อมูลใน Array หากเราไม่ได้กำหนด Key ตัวแรกของ Array จะเริ่มต้นที่ 0<br>
                Value คือ ค่าที่เก็บอยู่ในตัวแปร
            </div>
            <div class="col-12">
                <img src="../image/lesson_5_1.png" class="center">
            </div>
            <div class="col-12">
                ตัวอย่างข้อมูลที่เก็บอยู่ในตัวแปร $book
            </div>
            <div class="col-12 ptop10">
                <div style="padding-left:10%; padding-right:10%;">
                    <table class="table" style="border:2px solid #b8daff;">
                        <tr class="table-primary">
                            <th>Key</th>
                            <th>Value</th>
                        </tr>
                        <tr>
                            <td>0</td>
                            <td>NodeJs</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Java</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>PHP</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>JQuery</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-12">
                เราสามารถเข้าถึงข้อมูลภายใน Array ทีละตัวได้โดยกำหนด Key ที่ต้องการ<br>
                ตัวอย่าง $book[2] จะได้ผลลัพธ์คือ ข้อมูลที่อยู่ลำดับที่ 2 ใน Array โดยเริ่มนับจาก 0
            </div>
            <div class="col-12">
                <img src="../image/lesson_5_2.png" class="center">
            </div>
            <div class="col-12">
                การแสดงผลข้อมูลที่อยู่ในตัวแปร $book ในลำดับที่ 2 คือ PHP
            </div>
            <div class="col-12">
                <img src="../image/lesson_5_3.png" class="center">
            </div>
            <div class="col-12">
                การกำหนด Key และ Value ให้กับ ตัวแปล Array ตัวอย่างกำหนด Key คือชื่อหนังสือ และ Value คือ
                จำนวนหนังสือ
            </div>
            <div class="col-12">
                <img src="../image/lesson_5_4.png" class="center">
            </div>
            <div class="col-12">
                เราสามารถเข้าถึงข้อมูลภายใน Array โดยกำหนด Key ที่ต้องการ ตัวอย่างต้องการแสดงผลค่าของ
                จำนวนหนังสือ ของ Key ที่มีชื่อว่า PHP จะได้ผลลัพธ์เป็น 10
            </div>
            <div class="col-12">
                <img src="../image/lesson_5_5.png" class="center">
            </div>
            <div class="col-12">
                ในการใช้งานเราจะประกาศตัวแปร และกำหนดค่าที่ต้องการไว้ในเครื่องหมาย [] หรือ array()
            </div>
            <div class="col-12">
                <img src="../image/lesson_5_6.png" class="center">
            </div>
            <div class="col-12">
                ตัวอย่างการแสดงผล
            </div>
            <div class="col-12">
                <img src="../image/lesson_5_7.png" class="center">
            </div>
            <div class="col-12">
                จากตัวอย่างข้างต้น เป็นการใช้งาน Array แบบ 1 มิติ เท่านั้น ยังมี Array แบบ 2 มิติ และ Array แบบ 3
                มิติ ที่ยังไม่ได้กล่าวถึงในEBook เล่มนี ้
            </div>
        </div>
        <div class="row ptop20">
            <div class="col-12">
                <b>การใช้งานคำสั่ง foreach เพื่อวนลูปแสดงข้อมูลภายใน Array</b>
            </div>
            <div class="col-12 ptop10">
                ตัวอย่างการใช้งาน foreach กรณีต้องการ แสดงค่า Key และ Value
            </div>
            <div class="col-12">
                รูปแบบคำสั่ง<br>
                foreach ( ตัวแปรที่เป็น Array as ตัวแปรที่รับค่า Key => ตัวแปรที่รับค่า Value) {<br>
                &emsp;คำสั่งที่ต้องการให้ทำงาน<br>
                }
            </div>
            <div class="col-12">
                ตัวอย่างคำสั่ง foreach
            </div>
            <div class="col-12">
                <img src="../image/lesson_5_8.png" class="center">
            </div>
            <div class="col-12">
                ตัวอย่างการแสดงผล
            </div>
            <div class="col-12">
                <img src="../image/lesson_5_9.png" class="center">
            </div>
            <div class="col-12">
                กรณีที่ตัวแปร Array ไม่ได้มีการกำหนด Key Array จะกำหนด Key ให้เป็นตัวเลขโดยอัตโนมัติโดยเริ่มต้น
                ด้วย 0
            </div>
            <div class="col-12">
                รูปแบบคำสั่ง
                foreach ( ตัวแปรที่เป็น Array as ตัวแปรที่รับค่า Value) {<br>
                &emsp;คำสั่งที่ต้องการให้ทำงาน<br>
                }
            </div>
            <div class="col-12">
                ตัวอย่างคำสั่ง
            </div>
            <div class="col-12">
                <img src="../image/lesson_5_10.png" class="center">
            </div>
            <div class="col-12">
                ตัวอย่างการแสดงผล
            </div>
            <div class="col-12">
                <img src="../image/lesson_5_11.png" class="center">
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include("../template/footer.php") ?>
</body>

