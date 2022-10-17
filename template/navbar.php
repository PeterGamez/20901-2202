<?php
$loc = './';
if (preg_match('/(\/lesson\/)+/', $_SERVER['SCRIPT_NAME'])) {
    $loc = '../';
}
?>

<div class="navbar-lock">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">20901-2202</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $loc ?>index.php">หน้าแรก</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
                        บทเรียน
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="<?php echo $loc ?>lesson/1.php">บทที่ 1 โปรแกรมจำลอง Server</a>
                        <a class="dropdown-item" href="<?php echo $loc ?>lesson/2.php">บทที่ 2 Start PHP</a>
                        <a class="dropdown-item" href="<?php echo $loc ?>lesson/3.php">บทที่ 3 ตัวแปร</a>
                        <a class="dropdown-item" href="<?php echo $loc ?>lesson/4.php">บทที่ 4 โครงสร้างการทำงาน</a>
                        <a class="dropdown-item" href="<?php echo $loc ?>lesson/5.php">บทที่ 5 Array</a>
                        <a class="dropdown-item" href="<?php echo $loc ?>lesson/6.php">บทที่ 6 Function</a>
                        <a class="dropdown-item" href="<?php echo $loc ?>lesson/7.php">บทที่ 7 Active MySQL</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $loc ?>workmanship.php">ผลงาน</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $loc ?>contact.php">ผู้พัฒนา</a>
                </li>
            </ul>
        </div>
    </nav>
</div>