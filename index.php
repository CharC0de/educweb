<?php
include 'head.php';
session_start();
if (!isset($_SESSION['username'])) {
    header('location: login.php');
    exit();
}
if ($_SESSION['position'] == 1) {
    header('location: admin.php');
    exit();
}

?>
<h1>
    Hello <?php echo $_SESSION['full_name'] ?>
</h1>
<nav class="d-flex flex-row nav justify-content-end align-items-center">
    <a class="text-bg-success" href="process.php?logout=logout">Logout</a>
</nav>

</header>

<main>
</main>

<?php
include 'foot.php'
?>