<link rel="stylesheet" href="<?= base_url("public/style/background_cs.css")?>">
<link rel="stylesheet" href="<?= base_url("public/style/usersview_cs.css")?>">
<script src="<?= base_url("public/javascript/background_js.js")?>"></script>

<div>
    <h3 class="text-center">List of Users</h3>
    <div class="adjust">
        <a href="<?= base_url('users/add'); ?>" class="btn btn-lg btn-danger adjustBtn">Add New User</a>
        <table class="adjustBtn table table-striped table-hover table-dark table-bordered table-responsive">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Fullname</th>
                    <th>Date Created</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($users as $user): ?>
                <tr>
                    <td><?= $user->id; ?></td>
                    <td><?= $user->username; ?></td>
                    <td><?= $user->email; ?></td>
                    <td><?= $user->fullname; ?></td>
                    <td><?= $user->datecreated; ?></td>
                    <td>
                        <a href="<?= base_url('users/view/'.$user->id); ?>" class="btn btn-sm btn-warning">View</a>
                        <a href="<?= base_url('users/edit/'.$user->id); ?>" class="btn btn-sm btn-secondary">Edit</a>
                        <a href="<?= base_url('users/delete/'.$user->id); ?>" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>