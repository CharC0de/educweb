<?php
include 'config.php';
include 'helpers.php';
if (!$_POST && !$_GET) {
    header('location: index.php');
    exit();
}

if (isset($_POST['register'])) {
    header('location: index.php');
    if ($_POST['password'] !== $_POST['confpassword']) {
        header('location: register.php?error=passwords_not_match');
        exit();
    }
    if (userExists($_POST['name'], $_POST['email'], $conn)) {
        header('location: register.php?error=user_already_exists');
    }

    $username = $_POST['name'];
    $email = $_POST['email'];
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (name,email,first_name,middle_name,last_name,password) VALUES('$username','$email','$first_name','$middle_name','$last_name','$password')";

    try {
        $result = mysqli_query($conn, $sql);
        if (!$result) {
            header("location: errors.php?error=$th");
            exit();
        } else {
            header("location: register.php?success=register");
            exit();
        }
    } catch (\Throwable $th) {
        header("location: errors.php?error=$th");
        exit();
    }
}

if (isset($_POST['login'])) {
    $username = $_POST['name'];
    if (!$result = userExists($_POST['name'], $_POST['name'], $conn)) {
        header('location: login.php?error=invalid_credentials');
        exit();
    } else {
        $userData = $result->fetch_assoc();

        if (!password_verify($_POST['password'], $userData['password'])) {
            header('location: login.php?error=invalid_credentials_pass');
            exit();
        } else {
            session_start();
            $_SESSION['username'] = $userData['name'];
            $_SESSION['full_name'] = $userData['first_name'] . ' ' . $userData['middle_name'] . ' ' . $userData['last_name'];
            $_SESSION['position'] = $userData['position'];
            header('location: index.php');
            exit();
        }
    }
}
if (isset($_GET['logout'])) {
    session_start();
    session_unset();
    session_destroy();
    header('location: login.php');
    exit();
}
