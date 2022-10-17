<?php
$loc = './';
if (preg_match('/(\/backend\/)+/', $_SERVER['SCRIPT_NAME'])) {
    $loc = '../';
}
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="<?php echo $loc ?>index.php"> <img src="<?php echo $_cfg['site_logo'] ?>" style="width:40px;"> <?php echo $_cfg['site_name'] ?></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <?php
        if ($_SESSION['user_type'] == 'visitor') {
        ?>
            <ul class="navbar-nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $loc ?>login.php">เข้าสู่ระบบ</a>
                </li>
            </ul>

        <?php
        } else {
        ?>
            <ul class="navbar-nav justify-content-end">
                <li class=" nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
                        <img src="<?php echo $_SESSION['user_image'] ?>" class="rounded" style="width:30px;">
                        <?php echo $_SESSION['user_username']; ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <?php
                        if ($_SESSION['user_type'] == 'owner') {
                        ?>
                            <a class="dropdown-item" href="<?php echo $loc ?>account.php">Account</a>
                        <?php
                        }
                        if ($_SESSION['user_type'] == 'admin' or $_SESSION['user_type'] == 'owner') {
                        ?>
                            <a class="dropdown-item" href="<?php echo $loc ?>backend.php">Backend</a>
                            <div class="dropdown-divider"></div>
                        <?php
                        }
                        ?>
                        <a class="dropdown-item" href="<?php echo $loc ?>changepw.php">เปลี่ยนรหัสผ่าน</a>
                        <a class="dropdown-item" href="<?php echo $loc ?>logout.php">ออกจากระบบ</a>
                    </div>
                </li>
            </ul>
        <?php
        }
        ?>
    </div>
</nav>
<div style="padding-bottom: 90px;"></div>