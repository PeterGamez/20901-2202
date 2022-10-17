<!-- Header -->
<?php include("../template/header.php") ?>

<head>
    <link rel="stylesheet" href="../vendor/style.css">
    <style>
        .table-padding {
            padding-left: 40px;
            padding-right: 40px;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <?php include("../template/navbar.php") ?>

    <!-- Body -->
    <div class="container">
        <div class="row ptop30">
            <div class="col-12">
                <b>ตัวแปร (Variables)</b>
            </div>
            <div class="col-12">
                &emsp;ตัวแปร คือ ที่พักสำหรับเก็บข้อมูลเพื่อใช้ในการคำนวณ หรือ แสดงผลข้อมูล ภายในระบบ โดยใน
                ภาษา PHP การสร้างตัวแปรจะมีเครื่องหมาย $ นำหน้า และตามด้วยชื่อตัวแปร เช่น $name;
                การกำหนดค่าให้กับตัวแปร เราสามารถ กำหนดค่าเริ่มต้นให้กับตัวแปรได้ เช่น $name = "Hello PHP";
                ตัวแปร name ก็จะเก็บค่าข้อความ
            </div>
            <div class="col-12">
                ข้อแนะนำการตั้งชื่อตัวแปร
            </div>
            <div class="col-12">
                <ul style="list-style-type:decimal">
                    <li>ชื่อของตัวแปรนั้นจะต้องขึ้นต้นด้วยเครื่องหมาย $ (Dollar Sign) และตามด้วยตัวอักษร ไม่เป็นตัวเลขหรือสัญลักษณ์พิเศษ</li>
                    <li>ชื่อของตัวแปรควรจะสื่อความหมาย กับการไปใช้งาน เข่น $fullname, $phone</li>
                    <li>ชื่อของตัวแปรชื่อเดียวกันแต่ใช้ตัวอักษรพิมพ์เล็กพิมพ์ใหญ่ถือว่าเป็นคนละตัวแปรกันเช่น $price, $PRICE</li>
                </ul>
            </div>
            <div class="col-12" style="padding-top: 10px;">
                ตัวอย่างการสร้างตัวแปร
            </div>
            <div class="col-12">
                <img src="../image/lesson_3_1.png" class="center">
            </div>
            <div class="col-12">
                ชนิดของข้อมูล ในตัวแปร
            </div>
            <div class="col-12">
                <ul style="list-style-type:decimal">
                    <li>Boolean เก็บข้อมูลเป็นค่า จริง true หรือ เท็จ false</li>
                    <li>Integer เก็บข้อมูลเป็นตัวเลขจำนวนเต็ม</li>
                    <li>Float, Double เก็บข้อมูลเป็นเลขจำนวนจริง</li>
                    <li>String เก็บข้อมูลที่เป็นข้อความ</li>
                    <li>Array เก็บข้อมูลหลาย ๆ ค่าไว้ในตัวแปรเดียว</li>
                </ul>
            </div>
            <div class="col-12 ptop10">
                ตัวอย่างการเก็บข้อมูลรูปแบบต่าง ๆ ในตัวแปร
            </div>
            <div class="col-12">
                <img src="../image/lesson_3_2.png" class="center">
            </div>
            <div class="col-12">
                &emsp;ในการประกาศตัวแปรบางภาษาโปรแกรมคอมพิวเตอร์อาจจำเป็นต้องระบุให้ชัดเจนว่าตัวแปรที่
                เราได้สร้างขึ้นมาเป็นตัวแปรชนิดใด แต่สำหรับในภาษา PHP นั้นไม่จำเป็นต้องระบุชนิดของตัวแปร ระบบ
                สามารถทราบได้เองว่าเป็นตัวแปรชนิดใด ซึ่งในการเขียนโปรแกรมนั้นเราจำเป็นต้องทราบว่าตัวแปรที่ใช้
                งานอยู่นั้นเก็บข้อมูลชนิดใดอยู่สามารถตรวจสอบได้โดยใช้คำสั่ง var_dump เพื่อตรวจสอบว่าตัวแปรที่ใช้
                งานเก็บข้อมูลแบบใด
            </div>
            <div class="col-12 ptop10">
                ตัวอย่างการใช้งานคำสั่ง var_dump เพื่อตรวจสอบชนิดของตัวแปร
            </div>
            <div class="col-12">
                <img src="../image/lesson_3_3.png" class="center">
            </div>
            <div class="col-12 ptop10">
                ตัวอย่างการแสดงผลเมื่อทำงานบน Web Browser
            </div>
            <div class="col-12">
                <img src="../image/lesson_3_4.png" class="center">
            </div>
        </div>
        <div class="row ptop30">
            <div class="col-12">
                <b>ตัวดำเนินการ (Operators)</b>
            </div>
            <div class="col-12">
                &emsp;ตัวดำเนินการ คือ เครื่องหมายที่ใช้ในการจัดการกับข้อมูลภายในตัวแปร เพื่อ กำหนดค่า คำนวณ
                เปรียบเทียบ เพิ่มค่า ลดค่า และ อื่น ๆ ตัวอย่างตัวดำเนินการเช่น เครื่องหมาย บวก ลบ คูณ หาร มากกว่า
                น้อยกว่า เป็นต้น
            </div>
            <div class="col-12 ptop10">
                ตัวอย่างตัวดำเนินการทางคณิตศาสตร์
            </div>
            <div class="col-12">
                &emsp;เราสามารถใช้งานเครื่องหมายทางคณิตศาสตร์เพื่อคำนวณค่าของตัวแปรได้ โดยกำหนดให้ตัว
                แปร $a มีค่า เท่ากับ 15 และ ตัวแปร $b = 10
            </div>
            <div class="col-12">
                <img src="../image/lesson_3_5.png" class="center">
            </div>
            <div class="col-12">
                ในตัวอย่าง นำค่าตัวแปร $a มาบวก กับ $b และนำค่าที่ได้มากำหนดให้กับตัวแปร $c ผลที่ได้คือ
                15 + 10 ดังนั้น ตัวแปร $c เก็บค่า 25
            </div>
            <div class="col-12">
                ผลการทำงาน
            </div>
            <div class="col-12">
                <img src="../image/lesson_3_6.png" class="center">
            </div>
            <div class="col-12">
                ตัวดำเนินการทางคณิตศาสตร์มีดังนี้
            </div>
            <div class="col-12">
                <ul style="list-style-type:none">
                    <li>กำหนดให้ตัวแปร $a มีค่าเท่ากับ 10 ตัวแปร $b มีค่าเท่ากับ 5</li>
                </ul>
            </div>
            <div class="col-12">
                <div class="table-padding">
                    <table class="table" style="border:2px solid #b8daff;">
                        <tr class="table-primary">
                            <th>ตัวดำเนินการ</th>
                            <th>ต้วอย่างการใช้งาน</th>
                            <th>ผลที่ได้</th>
                        </tr>
                        <tr>
                            <td>+ (บวก)</td>
                            <td>$a + $b</td>
                            <td>25</td>
                        </tr>
                        <tr>
                            <td>- (ลบ)</td>
                            <td>$a -$b</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td>* (คูณ)</td>
                            <td>$a * $b</td>
                            <td>150</td>
                        </tr>
                        <tr>
                            <td>/ (หาร)</td>
                            <td>$a % $b</td>
                            <td>5</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-12">
                ตัวดำเนินการเปรียบเทียบ
            </div>
            <div class="col-12">
                <ul style="list-style-type:none">
                    <li>เป็นการเปรียบเทียบค่าในตัวแปรหากเป็นจริงจะให้ค่า จริง (true) หรือไม่เป็นจริงจะได้ค่า เท็จ (false)</li>
                    <li>ตัวอย่าง $a == $b ไม่เป็นความจริง เนื่องจาก ค่า 15 ไม่เท่ากับ 5 จึงได้ค่าเท็จ (false)</li>
                </ul>
            </div>
            <div class="col-12">
                <div class="table-padding">
                    <table class="table" style="border:2px solid #b8daff;">
                        <tr class="table-primary">
                            <th>ตัวดำเนินการ</th>
                            <th>ต้วอย่างการใช้งาน</th>
                            <th>ผลที่ได้</th>
                        </tr>
                        <tr>
                            <td>== (เท่ากับ)</td>
                            <td>$a == $b</td>
                            <td>เท็จ(false)</td>
                        </tr>
                        <tr>
                            <td>=== (เท่ากับ) ชนิดข้อมูล ต้องเป็นชนิดเดียวกัน</td>
                            <td>$a === $b</td>
                            <td>เท็จ(false)</td>
                        </tr>
                        <tr>
                            <td>!= (ไม่เท่ากับ)</td>
                            <td>$a != $b</td>
                            <td>จริง(true)</td>
                        </tr>
                        <tr>
                            <td>> (มากกว่า)</td>
                            <td>$a > $b</td>
                            <td>จริง(true)</td>
                        </tr>
                        <tr>
                            <td>
                                < (น้อยกว่า)</td>
                            <td>$a < $b</td>
                            <td>เท็จ(false)</td>
                        </tr>
                        <tr>
                            <td>>= (มากกว่าหรือเท่ากับ)</td>
                            <td>$a >= $b</td>
                            <td>จริง(true)</td>
                        </tr>
                        <tr>
                            <td>
                                <= (น้อยกว่าหรือเท่ากับ)</td>
                            <td>$a <= $b</td>
                            <td>เท็จ(false)</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-12">
                ตัวดำเนินการตรรกศาสตร์
            </div>
            <div class="col-12">
                <div class="table-padding">
                    <table class="table" style="border:2px solid #b8daff;">
                        <tr class="table-primary">
                            <th>ตัวดำเนินการ</th>
                            <th>ต้วอย่างการใช้งาน</th>
                            <th>ผลที่ได้</th>
                        </tr>
                        <tr>
                            <td>|| (หรือ)</td>
                            <td>$a == $b</td>
                            <td>เท็จ(false)</td>
                        </tr>
                        <tr>
                            <td>or (หรือ)</td>
                            <td>$a === $b</td>
                            <td>เท็จ(false)</td>
                        </tr>
                        <tr>
                            <td>&& (และ)</td>
                            <td>$a != $b</td>
                            <td>จริง(true)</td>
                        </tr>
                        <tr>
                            <td>and (และ)</td>
                            <td>$a > $b</td>
                            <td>จริง(true)</td>
                        </tr>
                        <tr>
                            <td>! (ไม่)</td>
                            <td>$a < $b</td>
                            <td>เท็จ(false)</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-12">
                ตัวดำเนินการ เพิ่มค่า ลดค่า
            </div>
            <div class="col-12">
                <div class="table-padding">
                    <table class="table" style="border:2px solid #b8daff;">
                        <tr class="table-primary">
                            <th>ตัวดำเนินการ</th>
                            <th>ต้วอย่างการใช้งาน</th>
                            <th>ผลที่ได้</th>
                        </tr>
                        <tr>
                            <td>+=</td>
                            <td>$a += $b</td>
                            <td>$a = $a + $b</td>
                        </tr>
                        <tr>
                            <td>-=</td>
                            <td>$a -= $b</td>
                            <td>$a = $a -$b</td>
                        </tr>
                        <tr>
                            <td>*=</td>
                            <td>$a *= $b</td>
                            <td>$a = $a * $b</td>
                        </tr>
                        <tr>
                            <td>/=</td>
                            <td>$a /= $b</td>
                            <td>$a = $a / $b</td>
                        </tr>
                        <tr>
                            <td>%=</td>
                            <td>$a %= $b</td>
                            <td>$a = $a % $b</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include("../template/footer.php") ?>
</body>

