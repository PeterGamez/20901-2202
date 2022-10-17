<?php
require_once("../ajax/config.php");
include("../template/header.php");
?>

<?php
if ($_SESSION['login'] == true and ($_SESSION['user_type'] == "admin" or $_SESSION['user_type'] == "owner")) {
} else {
    echo "<script>window.location.href='../index.php'</script>";
}
?>

<?php
if (isset($_REQUEST['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM plants WHERE id = '$id'";
    $query = mysqli_query($conn, $sql);

    echo "<script>window.location.href='../backend.php'</script>";
}
?>