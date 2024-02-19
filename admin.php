<?php
include 'head.php';
session_start();
if (!isset($_SESSION['username'])) {
    header('location: login.php');
    exit();
}
if ($_SESSION['position'] == 0) {
    header('location: index.php');
    exit();
}
?>
<h1>
    Hello Admin <?php echo $_SESSION['username'] ?>
</h1>

<nav class="d-flex flex-row nav justify-content-end align-items-center">
    <a class="text-bg-success" href="process.php?logout=logout">Logout</a>
</nav>

</header>