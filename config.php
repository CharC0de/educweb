<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "educweb";



try {
    $conn = mysqli_connect($host, $user, $password, $db);
    if (!$conn) {
        header("location: errors.php?error=db_connect_failed");
        exit();
    }
} catch (\Throwable $th) {
    header("location: errors.php?error=$th");
    exit();
}
