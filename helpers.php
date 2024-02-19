<?php
include  'config.php';

function userExists($name, $email, $conn)
{
    $sql = "SELECT * FROM users WHERE name = '$name' OR email = '$email'";
    try {
        $result = mysqli_query($conn, $sql);
        if ($result->num_rows == 0) {
            return false;
        } else {
            return $result;
        }
    } catch (\Throwable $th) {
        header("location: errors.php?error=$th");
        exit();
    }
}
