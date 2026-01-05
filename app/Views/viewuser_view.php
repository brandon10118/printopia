<header class="text-center">
    <h1>Viewing User Account</h1>
</header>
<main>
    <div class="col col-md-5 mx-auto">
        <form action="" method="post">
            <div class="form-group mb-2">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" id="username" class="form-control" readonly value="<?= $user['username'] ?>">
            </div>
            <div class="form-group mb-2">
                <label for="fullname" class="form-label">Full Name</label>
                <input type="text" name="fullname" id="fullname" class="form-control" readonly value="<?= $user['fullname'] ?>">
            </div>
            <div class="form-group mb-2">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" readonly value="<?= $user['email'] ?>">
            </div>
            <div class="form-group">
                <a href="<?= base_url('users'); ?>" class="btn btn-warning">Back To Users List</a></div>
        </form>
    </div>
</main>