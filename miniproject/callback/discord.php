<?php
require_once("../ajax/config.php");

if ($_SESSION['login'] == true) {
    echo "<script>window.location.href = '../index.php';</script>";
    exit();
}

$authorizeURL = 'https://discordapp.com/api/oauth2/authorize';
$tokenURL = 'https://discordapp.com/api/oauth2/token';
$apiURLBase = 'https://discordapp.com/api/users/@me';

if (isset($_REQUEST['login'])) {
    $params = array(
        'client_id' => $_cfg['discord_id'],
        'redirect_uri' => $_cfg['discord_callback'],
        'response_type' => 'code',
        'scope' => 'identify email'
    );

    header('Location: ' . $authorizeURL . '?' . http_build_query($params));
} else if (isset($_REQUEST['code'])) {
    $token = apiRequest($tokenURL, array(
        "grant_type" => "authorization_code",
        "client_id" => $_cfg['discord_id'],
        "client_secret" => $_cfg['discord_secret'],
        "redirect_uri" => $_cfg['discord_callback'],
        "code" => $_REQUEST['code']
    ));
    $_SESSION['access_token'] = $token->access_token;

    header('Location: ' . $_SERVER['PHP_SELF']);
} else if ($_SESSION['access_token']) {
    $user = apiRequest($apiURLBase);
    unset($_SESSION['access_token']);
    $email = $user->email;

    $sql = "SELECT * FROM user WHERE email ='$email'";
    $query = mysqli_query($conn, $sql);
    $data = mysqli_fetch_object($query);

    if ($data) {
        $_SESSION['user_id'] = $data->id;
        $_SESSION['user_username'] = $data->username;
        $_SESSION['user_email'] = $data->email;
        $_SESSION['user_type'] = $data->type;
        $_SESSION['user_image'] = 'https://cdn.discordapp.com/avatars/' . $user->id . '/' . $user->avatar . '.png';

        $_SESSION['login'] = true;

        echo "<script>alert('เข้าสู่ระบบเสร็จสิ้น')</script>";
        echo "<script>window.location.href='../index.php'</script>";
    } else {
        echo "<script>alert('ไม่พบอีเมลในระบบ')</script>";
        echo "<script>window.location.href='../login.php'</script>";
    }
} else {
    echo '<script>window.location.href = "../login.php";</script>';
}

function apiRequest($url, $post = null, $headers = array())
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

    $response = curl_exec($ch);

    if ($post) {
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));
    }

    $headers[] = 'Accept: application/json';

    if ($_SESSION['access_token'])
        $headers[] = 'Authorization: Bearer ' . $_SESSION['access_token'];

    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $response = curl_exec($ch);
    return json_decode($response);
}
