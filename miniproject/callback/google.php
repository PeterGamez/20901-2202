<?php
require_once("../ajax/config.php");
require_once('./google-api/vendor/autoload.php');

if ($_SESSION['login'] == true or !$_POST['credential']) {
    echo "<script>window.location.href = '../index.php';</script>";
    exit();
}

$client = new Google_Client(['client_id' => $_cfg['google_id']]);  // Specify the CLIENT_ID of the app that accesses the backend
$payload = $client->verifyIdToken($_POST['credential']);
if ($payload) {
    $email = $payload['email'];

    $sql = "SELECT * FROM user WHERE email = '$email'";

    $query = mysqli_query($conn, $sql);
    $data = mysqli_fetch_object($query);

    if ($data) {
        $_SESSION['user_id'] = $data->id;
        $_SESSION['user_username'] = $data->username;
        $_SESSION['user_email'] = $data->email;
        $_SESSION['user_type'] = $data->type;
        $_SESSION['user_image'] = $payload['picture'];

        $_SESSION['login'] = true;

        echo "<script>alert('เข้าสู่ระบบเสร็จสิ้น')</script>";
        echo "<script>window.location.href='../index.php'</script>";
    } else {
        echo "<script>alert('ไม่พบอีเมลในระบบ')</script>";
        echo "<script>window.location.href='../login.php'</script>";
    }
} else {
    echo "<script>alert('เกิดข้อผิดพลาด');</script>";
    echo "<script>window.location.href = '../login.php';</script>";
}
