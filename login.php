<?php
include 'head.php';
session_start();
if (isset($_SESSION['username'])) {
    header('location: index.php');
    exit();
}

?>
<h1>
    Login
</h1>
<nav class="d-flex flex-row nav justify-content-end">
    <a class=" m-3 text-bg-success" href="register.php">Register</a>
</nav>
</header>
<main class="h-50 d-flex flex-row justify-content-center align-items-center">
    <form class="w-25 d-flex flex-column" action="process.php" method="post">
        <h2 class="align-self-center">
            Login
        </h2>
        <div class="mb-3 ">

            <label for="" class="form-label">Username</label>
            <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="Username" />
            <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="" placeholder="Passwowrd" />
        </div>

        <button type="submit" class="btn btn-primary" name="login">Login</button>

    </form>
</main>

<?php
include 'foot.php'
?>