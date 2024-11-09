<link rel="stylesheet" href="<?= base_url("public/style/background_cs.css")?>">
<script src="<?= base_url("public/javascript/background_js.js")?>"></script>

<div class="d-flex align-items-center justify-content-center">
    <div class="col col-md-6">
        <form action="" method="post" class="adjust">
            <div class="form-group mb-2">
                <label for="username" class=" form-label">Username</label>
                <input type="text" name="username" id="username" class="form-control" value="<?= $user['username']; ?>" readonly>
            </div>
            <div class="form-group mb-2">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="<?= $user['email']; ?>" readonly>
            </div>
            <div class="form-group mb-2">
                <label for="fullname" class="form-label">Fullname</label>
                <input type="text" name="fullname" id="fullname" class="form-control" value="<?= $user['fullname']; ?>" readonly>
            </div>
            <div class="form-group">
                <a href="<?= base_url('users'); ?>" class="btn btn-danger">Go Back</a>
            </div>
        </form>
    </div>
</div>