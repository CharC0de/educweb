<?php
include 'head.php'
?>
<h1>
    Register
</h1>
<nav class="d-flex flex-row nav justify-content-end">
    <a class=" m-3 text-bg-success" href="login.php">Login</a>
</nav>
</header>
<main class="d-flex flex-row justify-content-center">
    <form class="w-25 d-flex flex-column" action="process.php" method="post">
        <div class="mb-3">
            <label for="" class="form-label">First Name</label>
            <input type="text" class="form-control" name="first_name" id="" aria-describedby="helpId" placeholder="First Name" required />

        </div>
        <div class="mb-3">
            <label for="" class="form-label">Middle Name</label>
            <input type="text" class="form-control" name="middle_name" id="" aria-describedby="helpId" placeholder="Middle Name" required />

        </div>
        <div class="mb-3">
            <label for="" class="form-label">Last Name</label>
            <input type="text" class="form-control" name="last_name" id="" aria-describedby="helpId" placeholder="Last Name" required />

        </div>
        <div class="mb-3">
            <label for="" class="form-label">Username</label>
            <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="Username" required />

        </div>
        <div class="mb-3">
            <label for="" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="" aria-describedby="helpId" placeholder="Email" required />
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="" placeholder="Passwowrd" required />
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" name="confpassword" id="" placeholder="Confirm Password" required />
        </div>
        <button type="submit" class="btn btn-primary" name="register">Submit</button>
        <p class=" text-danger">
            <?php
            if (isset($_GET['error'])) {
                if ($_GET['error'] == "passwords_not_match") {
                    echo "Passwords do not Match";
                } elseif ($_GET['error'] == "user_already_exists") {
                    echo "User Already Exists";
                }
            }
            ?>
        </p>
        <p class=" text-success align-self-center">
            <?php
            if (isset($_GET['success'])) {
                echo "Register Success!!";
            }
            ?>
        </p>

    </form>
</main>

<?php
include 'foot.php'
?>