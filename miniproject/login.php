<?php
require_once("./ajax/config.php");
include("./template/header.php");
?>

<?php
if ($_SESSION['login'] == true) {
    echo "<script>window.location.href='./index.php'</script>";
}

if (isset($_REQUEST['login'])) {
    $username = strtolower($_POST['username']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE username ='$username'";
    $query = mysqli_query($conn, $sql);
    $data = mysqli_fetch_object($query);

    if ($data) {
        if (password_verify($password, $data->password) == false) {
            echo "<script>alert('ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง')</script>";
            echo "<script>history.go(-1)</script>";
            exit();
        }

        $_SESSION['user_id'] = $data->id;
        $_SESSION['user_username'] = $data->username;
        $_SESSION['user_email'] = $data->email;
        $_SESSION['user_type'] = $data->type;

        $_SESSION['login'] = true;

        echo "<script>alert('เข้าสู่ระบบเสร็จสิ้น')</script>";
        echo "<script>window.location.href='./index.php'</script>";
    } else {
        echo "<script>alert('ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง')</script>";
        echo "<script>history.go(-1)</script>";
    }
}
?>

<head>
    <style>
        input[type=text],
        input[type=email],
        input[type=password] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 22px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]:focus,
        input[type=email]:focus,
        input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        /* Set a style for the submit button */
        .registerbtn {
            background-color: #04AA6D;
            color: white;
            padding: 10px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        .registerbtn:hover {
            opacity: 1;
        }

        /* Set a grey background color and center the text of the "sign in" section */
        .signin {
            background-color: #f1f1f1;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php include("./template/navbar.php"); ?>

    <!-- Header -->
    <div class="content">
        <div class="container">
            <form method="post" action="?login">
                <h1>Login</h1>
                <hr>
                <label for="username"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" id="username" required>
                <label for="password"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" id="password" required>

                <div class="row">
                    <div class="col-3">
                        <button type="submit" class="registerbtn">Login</button>
                    </div>
                    <div class="col-3"></div>
                    <div class="col-3">
                        <a href="./callback/discord.php?login">
                            <button type="button" class="btn btn-outline-primary"><img src="https://i.imgur.com/jlmMx1R.jpg" class="rounded" style="width:30px;"> Login with Discord</button>
                        </a>
                    </div>
                    <div class="col-3">
                        <div id="g_id_onload" data-client_id="<?php echo $_cfg['google_id'] ?>" data-login_uri="<?php echo $_cfg['google_callback'] ?>" data-auto_prompt="false">
                        </div>
                        <div class="g_id_signin" data-type="standard" data-size="large" data-theme="outline" data-text="sign_in_with" data-shape="rectangular" data-logo_alignment="left">
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>

    <!-- Footer -->
    <?php include("./template/footer.php") ?>
</body>