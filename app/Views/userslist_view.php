<header class="text-center">
    <h1>Users List</h1>
</header>
<main>
    <div class="col col-md-8 mx-auto">
        <a href="<?= base_url('users/add'); ?>" class="btn btn-primary">Add New User</a>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>User Name</th>
                    <th>Full Name</th>
                    <th>E-Mail</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($users as $user): ?>
                <tr>
                    <td><?= $user['username'] ?></td>
                    <td><?= $user['fullname'] ?></td>
                    <td><?= $user['email'] ?></td>
                    <td>
                        <a href="<?= base_url('users/view/'.$user['id']) ?>" class="btn btn-sm btn-success">View</a>
                        <a href="<?= base_url('users/edit/'.$user['id']) ?>" class="btn btn-sm btn-secondary">Update</a>
                        <a href="<?= base_url('users/delete/'.$user['id']) ?>" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>