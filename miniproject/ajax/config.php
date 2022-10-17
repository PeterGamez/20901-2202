<?php
// Session
session_start();
if (!isset($_SESSION['token'])) {
    $_SESSION['token'] = SESSION_ID();
    $_SESSION['login'] = false;
    $_SESSION['user_type'] = 'visitor';
    $_SESSION['user_image'] = 'https://i.imgur.com/bqSaPJc.png';
}

// Site
$_cfg['site_name'] = 'ฐานข้อมูลพรรณไม้';
$_cfg['site_logo'] = 'https://i.imgur.com/bqSaPJc.png';

// Database
$_cfg['db_host'] = '';
$_cfg['db_user'] = '';
$_cfg['db_pass'] = '';
$_cfg['db_name'] = '';

// Google
$_cfg['google_id'] = '.apps.googleusercontent.com';
$_cfg['google_secret'] = '';
$_cfg['google_callback'] = 'https://svc.allzoneth.com/2202/miniproject/callback/google.php';

// Discord
$_cfg['discord_id'] = '';
$_cfg['discord_secret'] = '';
$_cfg['discord_callback'] = 'https://svc.allzoneth.com/2202/miniproject/callback/discord.php';

// Connect Database
$conn = mysqli_connect($_cfg['db_host'], $_cfg['db_user'], $_cfg['db_pass'], $_cfg['db_name']);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_set_charset($conn, 'utf8');
date_default_timezone_set("Asia/Bangkok");

// echo json_encode($_SESSION);